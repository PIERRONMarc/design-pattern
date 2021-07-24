<?php

namespace MPierron\Factory;

use MPierron\Product\Car;
use MPierron\Product\Clio;
use MPierron\Product\Megane;

class Renault extends CarConstructor 
{
    public function createCar($car): Car
    {
        switch ($car) {
            case Megane::class:
                return new Megane();
                break;
            case Clio::class:
                return new Clio();
                break;
            
            default:
                return new Class extends Car {
                    public function assemble(): string
                    {
                        return "can't assemble an anonmyous car!";
                    }
                };
                break;
        }
    }
}