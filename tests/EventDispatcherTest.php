<?php

declare(strict_types=1);

namespace MPierron\Observer\Tests;

use PHPUnit\Framework\TestCase;
use MPierron\Observer\EventDispatcher;
use MPierron\Observer\EventInterface;
use MPierron\Observer\EventListenerInterface;
use MPierron\Observer\Tests\Fixtures\FooEvent;
use MPierron\Observer\Tests\Fixtures\FooListener;

class EventDispatcherTest extends TestCase
{
    public function testIfDispatchIsSuccessful(): void
    {
        $eventDispatcher = new EventDispatcher();
        $eventListener = new FooListener();
        $event = new FooEvent("qux");

        $eventDispatcher->attach(FooEvent::getName(), $eventListener);
        $eventDispatcher->dispatch(FooEvent::getName(), $event);

        $this->assertEquals("bar", $event->getTest());
    }
}