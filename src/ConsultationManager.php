<?php

namespace App;


use App\Entities\Consultation;
use App\Entities\Specialist;

class ConsultationManager
{

    public function bookConsultation(Consultation $consultation)
    {
        // 1. Check project status is open

        if ($consultation->getProject()->getStatus() != 'open') {
            return new \Exception();
        }

        // 2. Check consultation is in the future
        if ($consultation->getDate()->isInThePast()) {
            return new \Exception();
        }

        // 3. Check specialist hasn't been blacklisted by Company compliance manager
        if (in_array($consultation->getSpecialist()->getId(), $consultation->getClient()->getCompany()->getBlacklistedSpecialists()))
        {
            return new \Exception();
        }

        // 4. Check specialist is available
        if ($this->isSpecialistAvailable($consultation->getSpecialist()) == false)
        {
            return new \Exception();
        }

        // 5. Check if Client has hours left in package if using package
        //TODO later

        // 6. Record Consultation into database
        $this->save($consultation);
    }

    private function save(Consultation $consultation)
    {

    }

    private function isSpecialistAvailable(Specialist $specialist): bool
    {
        return true;
    }
}