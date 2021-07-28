<?php

namespace App\Command;

class MacroCommand implements CommandInterface
{
    private $commands;

    public function __construct(array $commands)
    {
        $this->commands = $commands;
    }

    public function execute(): void
    {
        foreach ($this->commands as $command) {
            $command->execute();
        }
    }

    public function cancel(): void
    {
        foreach ($this->commands as $command) {
            $command->cancel();
        }
    }
}