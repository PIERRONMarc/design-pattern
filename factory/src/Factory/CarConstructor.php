<?php

namespace MPierron\Factory;

use MPierron\Product\Car;

abstract class CarConstructor 
{
    /**
     * Car Factory function
     *
     * @param string $car car class name to instanciate
     * @return Car
     */
    abstract public function createCar(string $car): Car;

    public function buildCar(string $car): Car
    {
        return $this->createCar($car);
    }
}