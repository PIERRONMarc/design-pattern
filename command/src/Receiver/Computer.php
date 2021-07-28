<?php

namespace App\Receiver;

class Computer implements ComputerInterface
{
    private $isStarted;

    public function __construct($isStarted = false)
    {
        $this->isStarted = $isStarted;
    }

    public function getIsStarted(): bool
    {
        return $this->isStarted;
    }

    public function start(): void
    {
        $this->isStarted = true;
    }

    public function stop(): void
    {
        $this->isStarted = false;
    }
}