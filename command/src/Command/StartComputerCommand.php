<?php

namespace App\Command;

use App\Receiver\ComputerInterface;

class StartComputerCommand implements CommandInterface
{
    private $computer;

    public function __construct(ComputerInterface $computer)
    {
        $this->computer = $computer;
    }

    public function execute(): void
    {
        $this->computer->start();
    }

    public function cancel(): void
    {
        $this->computer->stop();
    }
}