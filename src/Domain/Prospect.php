<?php

namespace App\Domain;


class Prospect
{
    public const REGISTERED = 'registered';
    public const IN_PROGRESS = 'in_progress';
    public const NOT_INTERESTED = 'not_interested';
    public const UNREACHABLE = 'unreachable';

    private $status;
    private $name;
    private $contactInfo;


    /**
     * Prospect constructor.
     * @param string $status
     * @param string $name
     * @param string $contactInfo
     */
    private function __construct(string $status, string $name, string $contactInfo)
    {
        $this->status      = $status;
        $this->name        = $name;
        $this->contactInfo = $contactInfo;
        //TODO raise event
    }


    public static function create(string $name, string $contactInfo): self
    {
        return new self(self::IN_PROGRESS, $name, $contactInfo);
    }

    public function updateStatus(string $status)
    {
        if (in_array($status, [
                self::REGISTERED,
                self::IN_PROGRESS,
                self::NOT_INTERESTED,
                self::UNREACHABLE]) == false
        ) {
            throw new \Exception();
        }

        $this->status = $status;
        //TODO raise event
    }
}