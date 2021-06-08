<?php

namespace MPierron\Observer;

interface EventDispatcherInterface
{
    public function dispatch(string $eventName, EventInterface $event): void;

    public function attach(string $eventName, EventListenerInterface $listener): void;
}