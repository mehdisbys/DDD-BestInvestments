<?php

namespace App\Domain;

class Reference
{
    private $reference ;


    private function __construct(string $reference)
    {
        $this->reference = $reference;
    }

    public static function create()
    {
        return new self('AB1234');
    }

    /**
     * @return string
     */
    public function getReference(): string
    {
        return $this->reference;
    }


}