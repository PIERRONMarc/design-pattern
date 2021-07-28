<?php

namespace App\Receiver;

interface ComputerInterface
{
    public function getIsStarted(): bool;
    public function start(): void;
    public function stop(): void;
}