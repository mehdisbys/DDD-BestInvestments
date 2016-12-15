<?php

namespace App\Entities;


class Specialist
{
    private $id;

    /** @var  string */
    private $name;

    /** @var  string */
    private $tel;

    /** @var  string */
    private $email;

    /** @var  string */
    private $hourlyRate;

    /**
     * Specialist constructor.
     * @param string $name
     * @param string $tel
     * @param string $email
     * @param string $hourlyRate
     */
    public function __construct($name, $tel, $email, $hourlyRate)
    {
        $this->name       = $name;
        $this->tel        = $tel;
        $this->email      = $email;
        $this->hourlyRate = $hourlyRate;
    }

    /**
     * @return mixed
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
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getHourlyRate()
    {
        return $this->hourlyRate;
    }


}