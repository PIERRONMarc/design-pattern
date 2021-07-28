<?php

namespace App\Command\Tests;

use App\Command\MacroCommand;
use App\Invoker\Invoker;
use App\Receiver\Computer;
use PHPUnit\Framework\TestCase;
use App\Command\StopComputerCommand;
use App\Command\StartComputerCommand;

class CommandTest extends TestCase
{
    public function testStartComputerCommand()
    {
        $computer = new Computer();
        $startCommand = new StartComputerCommand($computer);
        $invoker = new Invoker();
        $invoker->setCommand($startCommand);
        $invoker->executeCommand();

        $this->assertEquals(true, $computer->getIsStarted());
    }

    public function testStopComputerCommand()
    {
        $computer = new Computer();
        $stopCommand = new StopComputerCommand($computer);
        $invoker = new Invoker();
        $invoker->setCommand($stopCommand);
        $invoker->executeCommand();

        $this->assertEquals(false, $computer->getIsStarted());
    }

    public function testCancelStartComputerCommand()
    {
        $computer = new Computer();
        $startCommand = new StartComputerCommand($computer);
        $invoker = new Invoker();
        $invoker->setCommand($startCommand);
        $invoker->executeCommand();
        $invoker->cancelCommand();

        $this->assertEquals(false, $computer->getIsStarted());
    }

    public function testMacroCommand()
    {
        $computer = new Computer(true);
        $startCommand = new StartComputerCommand($computer);
        $stopCommand = new StopComputerCommand($computer);
        $restartCommand = new MacroCommand([$stopCommand, $startCommand]);
        $invoker = new Invoker();
        $invoker->setCommand($restartCommand);
        $invoker->executeCommand();

        $this->assertEquals(true, $computer->getIsStarted());
    }

}