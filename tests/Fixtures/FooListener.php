<?php

namespace MPierron\Observer\Tests\Fixtures;

use MPierron\Observer\EventInterface;
use MPierron\Observer\EventListenerInterface;

class FooListener implements EventListenerInterface
{
    /**
     * @param ?FooEvent $event
     */
    public function listen(?EventInterface $event): void
    {
        $event->setTest("bar");
    }
}