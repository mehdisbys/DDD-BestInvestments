<?php

namespace App\Entities;

class Company
{

    /** @var  int */
    private $id;

    /** @var  string */
    private $name;

    /** @var  string */
    private $contactName;

    /** @var  string */
    private $contactTel;

    /** @var  string */
    private $contactEmail;

    /** @var  array */
    private $blacklistedSpecialists;

    /**
     * Company constructor.
     * @param int    $id
     * @param string $name
     * @param string $contactName
     * @param string $contactTel
     * @param string $contactEmail
     * @param array  $blacklistedSpecialists
     */
    public function __construct($name, $contactName, $contactTel, $contactEmail, array $blacklistedSpecialists)
    {
        $this->name                   = $name;
        $this->contactName            = $contactName;
        $this->contactTel             = $contactTel;
        $this->contactEmail           = $contactEmail;
        $this->blacklistedSpecialists = $blacklistedSpecialists;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getContactName(): string
    {
        return $this->contactName;
    }

    /**
     * @return string
     */
    public function getContactTel(): string
    {
        return $this->contactTel;
    }

    /**
     * @return string
     */
    public function getContactEmail(): string
    {
        return $this->contactEmail;
    }

    /**
     * @return array
     */
    public function getBlacklistedSpecialists(): array
    {
        return $this->blacklistedSpecialists;
    }


}