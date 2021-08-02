<?php

namespace App\Subsystem;

class SoundAmplifier
{
    private $isTurnedOn;

    public function __construct()
    {
        $this->isTurnedOn = false;
    }

    public function isTurnedOn(): bool
    {
        return $this->isTurnedOn;
    }

    public function turnOn(): self
    {
        $this->isTurnedOn = true;

        return $this;
    }
}