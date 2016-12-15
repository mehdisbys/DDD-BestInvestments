<?php

namespace App\Entities;


class Consultation
{
    private $id;

    /** @var  Client */
    private $client;

    /** @var  Project */
    private $project;

    /** @var  Specialist */
    private $specialist;

    /** @var  \DateTime */
    private $date;

    /** @var  int */
    private $duration;

    /** @var  int */
    private $billableDuration;

    /** @var  string */
    private $status;

    /**
     * Consultation constructor.
     * @param Client   $client
     * @param Project    $project
     * @param Specialist $specialist
     * @param \DateTime  $date
     * @param int        $duration
     * @param int        $billableDuration
     * @param string     $status
     */
    public function __construct(Client $client, Project $project, Specialist $specialist, \DateTime $date, $duration, $billableDuration, $status)
    {
        $this->client         = $client;
        $this->project          = $project;
        $this->specialist       = $specialist;
        $this->date             = $date;
        $this->duration         = $duration;
        $this->billableDuration = $billableDuration;
        $this->status           = $status;
    }

    /**
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }

    /**
     * @return Project
     */
    public function getProject(): Project
    {
        return $this->project;
    }

    /**
     * @return Specialist
     */
    public function getSpecialist(): Specialist
    {
        return $this->specialist;
    }

    /**
     * @return \DateTime
     */
    public function getDate(): \DateTime
    {
        return $this->date;
    }

    /**
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @return int
     */
    public function getBillableDuration(): int
    {
        return $this->billableDuration;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }




}