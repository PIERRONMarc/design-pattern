<?php

namespace MPierron\ConcreteFactory;

use MPierron\ConcreteProduct\MichelinTyres;
use MPierron\ConcreteProduct\RenaultEngine;
use MPierron\AbstractFactory\CarParts;
use MPierron\ConcreteProduct\ContinentalTyres;
use MPierron\ConcreteProduct\HondaEngine;
use MPierron\Product\Engine;
use MPierron\Product\Tyres;

class ClioParts implements CarParts
{
    public function createTyres(): Tyres
    {
       return new ContinentalTyres(); 
    }

    public function createEngine(): Engine
    {
        return new HondaEngine(); // Honda engine in a clio ?!?
    }
}