<?php

namespace App\Command;

use App\Receiver\ComputerInterface;

class StopComputerCommand implements CommandInterface
{
    private $computer;

    public function __construct(ComputerInterface $computer)
    {
        $this->computer = $computer;
    }

    public function execute(): void
    {
        $this->computer->stop();
    }

    public function cancel(): void
    {
        $this->computer->start();
    }
}