<?php

namespace MPierron\Singleton;

class Singleton 
{
    static private $instance = null;
    private $isUpdated = false;

    private function __construct(){}

    static public function getInstance(): self
    {
        if (isset(self::$instance)) {
            return self::$instance;
        } else {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }

    public function update(): void
    {
        $this->isUpdated = true;
    }

    public function getIsUpdated(): bool
    {
        return $this->isUpdated;
    }
}