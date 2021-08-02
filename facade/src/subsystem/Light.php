<?php

namespace App\Subsystem;

class Light
{
    private $luminosity;

    const LUMINOSITY_LOW = 1;
    const LUMINOSITY_MEDIUM = 2;
    const LUMINOSITY_HIGH = 3;

    public function __construct()
    {
        $this->luminosity = self::LUMINOSITY_MEDIUM;
    }

    public function setLuminosity($luminosity): self
    {
        $this->luminosity = $luminosity;

        return $this;
    }

    public function getLuminosity(): int
    {
        return $this->luminosity;
    }

    
}