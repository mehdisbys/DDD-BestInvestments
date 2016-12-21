<?php

namespace App\Domain;


class Specialist
{

    private $email;
    private $password;


    /**
     * Specialist constructor.
     * @param $email
     * @param $password
     */
    private function __construct($email, $password)
    {
        $this->email    = $email;
        $this->password = $password;
        //TODO raise event
    }


    public static function register(string $email, string $password, bool $termsAndConditions):self
    {

        if($termsAndConditions == false)
        {
            throw new \Exception();
        }

        return new self($email, $password);
    }
}