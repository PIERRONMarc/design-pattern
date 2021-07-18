<?php

namespace MPierron\Decorator;

abstract class Drink {

    private $description = "Undefined drink";

    public function __construct($description)
    {
        $this->description = $description;
    }

    /**
     * Return the price of the drink
     *
     * @return float
     */
    abstract public function getPrice(): float;

    public function getDescription(): string
    {
        return $this->description;
    }
}