<?php

namespace App\Entities;

use App\Domain\ClientID;
use App\Domain\ProjectManagerID;
use App\Domain\Reference;
use App\Domain\Status;

class Project
{

    /** @var  Reference */
    private $reference;

    /** @var  string */
    private $name;

    /** @var \DateTime */
    private $endDate;

    /** @var Status */
    private $status;

    /** @var  ClientID */
    private $clientID;

    private $projectManagerId;

    private $specialists;


    /**
     * Project constructor.
     * @param           $name
     * @param \DateTime $endDate
     * @param ClientID  $clientID
     */
    private function __construct($name, \DateTime $endDate, ClientID $clientID)
    {
        $this->reference = Reference::create();
        $this->status    = Status::draft();
        $this->name      = $name;
        $this->endDate   = $endDate;
        $this->clientID  = $clientID;

        //TODO raise event
    }


    public static function setup(string $name, \DateTime $endDate, ClientID $clientID)
    {
        return new self($name, $endDate, $clientID);
    }


    public function start(ProjectManagerID $projectManagerID)
    {
        $this->projectManagerId = $projectManagerID;
        $this->status = Status::ACTIVE;
        //TODO raise event
    }


    public function addSpecialist($specialistId)
    {
        if($this->status != Status::ACTIVE) {
            //TODO raise event
            throw new \Exception();
        }

        $this->specialists[] = $specialistId;

        //TODO raise event
    }

}