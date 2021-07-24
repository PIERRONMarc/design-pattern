<?php

namespace MPierron\ConcreteFactory;

use MPierron\Product\Car;
use MPierron\ConcreteProduct\Clio;
use MPierron\ConcreteProduct\Megane;
use MPierron\Factory\CarConstructor;

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