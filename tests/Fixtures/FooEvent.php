<?php

namespace MPierron\Observer\Tests\Fixtures;

use MPierron\Observer\EventInterface;

class FooEvent implements EventInterface
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
}