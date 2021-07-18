<?php

namespace MPierron\Observer\Tests\Fixtures;

use Psr\EventDispatcher\StoppableEventInterface;

class BarEvent implements StoppableEventInterface
{

    public const EVENT_NAME = 'foo';

    private $test;

    public function __construct(string $test)
    {
        $this->test = $test;
    }

    public function getTest(): string
    {
        return $this->test;
    }

    public function setTest(string $test): self
    {
        $this->test = $test;

        return $this;
    }

    static public function getName(): string
    {
        return self::EVENT_NAME;
    }

    public function isPropagationStopped(): bool
    {
        return true;
    }
}