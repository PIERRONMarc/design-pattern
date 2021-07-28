<?php

namespace App\Invoker;

use App\Command\CommandInterface;

class Invoker
{
    private $command;

    public function setCommand(CommandInterface $command)
    {
        $this->command = $command;
    }

    public function executeCommand()
    {
        $this->command->execute();
    }

    public function cancelCommand()
    {
        $this->command->cancel();
    }
}