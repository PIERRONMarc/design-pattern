<?php

namespace MPierron\Observer;

use MPierron\Observer\EventDispatcherInterface;

class EventDispatcher implements EventDispatcherInterface
{
    /**
     * @var array<string, array<int, EventListenerInterface>>
     */
    private $listeners = [];

    public function dispatch(string $eventName, EventInterface $event): void
    {
        foreach ($this->listeners[$eventName] as $listener) {
            $listener->listen($event);
        }
    }

    public function attach(string $eventName, EventListenerInterface $listener): void
    {
        $this->listeners[$eventName][] = $listener;
    }
}