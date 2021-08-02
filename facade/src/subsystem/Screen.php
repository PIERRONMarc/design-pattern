<?php

namespace App\Subsystem;

class Screen
{
    private $isLowered;

    public function __construct()
    {
        $this->isLowered = false;
    }

    public function isLowered(): bool
    {
        return $this->isLowered;
    }

    public function lower(): self
    {
        $this->isLowered = true;

        return $this;
    }
}