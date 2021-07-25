<?php

namespace MPierron\ConcreteFactory;

use MPierron\ConcreteProduct\MichelinTyres;
use MPierron\ConcreteProduct\RenaultEngine;
use MPierron\AbstractFactory\CarParts;
use MPierron\Product\Engine;
use MPierron\Product\Tyres;

class MeganeParts implements CarParts
{
    public function createTyres(): Tyres
    {
       return new MichelinTyres(); 
    }

    public function createEngine(): Engine
    {
        return new RenaultEngine();
    }
}