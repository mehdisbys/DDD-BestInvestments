<?php

namespace App\Entities;


class Project
{

    /** @var  int */
    private $id;

    /** @var  string */
    private $name;

    /** @var  Client */
    private $client;

    /** @var  \DateTime */
    private $startDate;

    /** @var  \DateTime */
    private $endDate;

    /** @var  string */
    private $status;

    /**
     * Project constructor.
     * @param string    $name
     * @param Client    $client
     * @param \DateTime $startDate
     * @param \DateTime $endDate
     * @param string    $status
     */
    public function __construct($name, Client $client, \DateTime $startDate, \DateTime $endDate, $status)
    {
        $this->name      = $name;
        $this->client    = $client;
        $this->startDate = $startDate;
        $this->endDate   = $endDate;
        $this->status    = $status;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return Client
     */
    public function getClient(): Client
    {
        return $this->client;
    }



    /**
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }


}