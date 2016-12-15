<?php

namespace App\Entities;


class PayAsYouGo
{
    /** @var  int */
    private $id;

    /** @var  string */
    private $client;

    /** @var  string */
    private $hourlyRate;

    /**
     * PayAsYouGo constructor.
     * @param string $client
     * @param string $hourlyRate
     */
    public function __construct($client, $hourlyRate)
    {
        $this->client     = $client;
        $this->hourlyRate = $hourlyRate;
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
    public function getClient()
    {
        return $this->client;
    }

    /**
     * @return string
     */
    public function getHourlyRate()
    {
        return $this->hourlyRate;
    }



}