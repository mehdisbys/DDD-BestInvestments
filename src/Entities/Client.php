<?php

namespace App\Entities;


class Client
{

    private $id;

    /** @var  Company */
    private $company;

    /** @var  string */
    private $name;

    /** @var  string */
    private $tel;

    /** @var  string */
    private $email;

    /**
     * Employee constructor.
     * @param Company $company
     * @param string  $name
     * @param string  $tel
     * @param string  $email
     */
    public function __construct(Company $company, $name, $tel, $email)
    {
        $this->company = $company;
        $this->name    = $name;
        $this->tel     = $tel;
        $this->email   = $email;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * @return Company
     */
    public function getCompany(): Company
    {
        return $this->company;
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


}