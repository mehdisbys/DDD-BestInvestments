<?php

namespace App\Domain;


class Lead
{
    private $name;
    private $contactInfo;

    /**
     * Lead constructor.
     * @param $name
     * @param $contactInfo
     */
    public function __construct($name, $contactInfo)
    {
        $this->name        = $name;
        $this->contactInfo = $contactInfo;
    }

    public function sendToProspectingTeam()
    {
        //TODO raise event
    }

}