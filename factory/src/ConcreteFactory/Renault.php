<?php

namespace MPierron\ConcreteFactory;

use MPierron\Product\Car;
use MPierron\ConcreteProduct\Clio;
use MPierron\ConcreteProduct\Megane;
use MPierron\Factory\CarConstructor;
use MPierron\ConcreteFactory\ClioParts;
use MPierron\ConcreteFactory\MeganeParts;

class Renault extends CarConstructor 
{
    public function createCar($car): Car
    {
        switch ($car) {
            case Megane::class:
                return new Megane(new MeganeParts());
                break;
            case Clio::class:
                return new Clio(new ClioParts());
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