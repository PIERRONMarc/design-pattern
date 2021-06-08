<?php

namespace MPierron\Observer;

interface EventListenerInterface
{
    public function listen(?EventInterface $event): void;
}