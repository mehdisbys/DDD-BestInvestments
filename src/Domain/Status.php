<?php

namespace App\Domain;


class Status
{

    public const DRAFT = 'draft';
    public const ACTIVE = 'active';

    private $status;

    /**
     * Status constructor.
     * @param $status
     */
    private function __construct($status)
    {
        $this->status = $status;
    }


    public static function draft()
    {
        return new self(self::DRAFT);
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

}