<?php

namespace MPierron\Product;

use MPierron\AbstractFactory\CarParts;

/**
 * Each car is built the same way but can be assembled in different way
 */
abstract class Car 
{
    protected $tyres;
    protected $engine;
    protected $carParts;

    public function __construct(CarParts $carParts)
    {
       $this->carParts = $carParts; 
    }

    abstract public function assemble(): string;

    public function build(): void
    {
        $this->tyres = $this->carParts->createTyres();
        $this->engine = $this->carParts->createEngine();
        $this->assemble();
    }

    public function getTyres(): Tyres
    {
        return $this->tyres;
    }

    public function getEngine(): Engine
    {
        return $this->engine;
    }
}