<?php

declare(strict_types=1);

namespace MPierron\Observer\Tests;

use PHPUnit\Framework\TestCase;
use MPierron\Observer\EventDispatcher;
use MPierron\Observer\Tests\Fixtures\BarEvent;
use MPierron\Observer\Tests\Fixtures\FooEvent;
use Psr\EventDispatcher\ListenerProviderInterface;

class EventDispatcherTest extends TestCase
{
    private $eventDispatcher;

    protected function setUp(): void
    {
        $this->eventDispatcher = new EventDispatcher(new class implements ListenerProviderInterface {
            public function getListenersForEvent(object $event): iterable
            {
                $listeners = [
                    FooEvent::class => [
                        new class {
                            function listen(FooEvent $event): void {
                                $event->setTest("bar");
                            }
                        },
                        new class {
                            function listen(FooEvent $event): void {
                                $event->setTest("qux");
                            }
                        },
                    ],
                    BarEvent::class => [
                        new class {
                            function listen(BarEvent $event): void {
                                $event->setTest("foo");
                            }
                        },
                        new class {
                            function listen(BarEvent $event): void {
                                $event->setTest("qux");
                            }
                        },
                    ]
                ];

                return $listeners[get_class($event)];
            }
        });
    }

    public function testIfDispatchIsSuccessful(): void
    {
        $event = new FooEvent("foo");

        $this->assertEquals("foo", $event->getTest());

        $this->eventDispatcher->dispatch($event);

        $this->assertEquals("qux", $event->getTest());
    }

    public function testIfStoppableEventIsWorking(): void
    {
        $event = new BarEvent("bar");

        $this->assertEquals("bar", $event->getTest());

        $this->eventDispatcher->dispatch($event);

        $this->assertEquals("foo", $event->getTest());
    }
}