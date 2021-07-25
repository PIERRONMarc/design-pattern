<?php

namespace MPierron\Factory\Tests;

use PHPUnit\Framework\TestCase;
use MPierron\ConcreteProduct\Clio;
use MPierron\ConcreteProduct\Megane;
use MPierron\ConcreteFactory\Renault;
use MPierron\ConcreteProduct\ContinentalTyres;
use MPierron\ConcreteProduct\HondaEngine;
use MPierron\ConcreteProduct\MichelinTyres;
use MPierron\ConcreteProduct\RenaultEngine;

class AbstractFactoryTest extends TestCase {

    public function testAbstractFactoryPattern()
    {
        $carConstructor = new Renault();
        $megane = $carConstructor->buildCar(Megane::class);
        $megane->build();

        $this->assertEquals(true, $megane->getTyres() instanceof MichelinTyres);
        $this->assertEquals(true, $megane->getEngine() instanceof RenaultEngine);
    }

    public function testIfCarsHaveDifferentsParts()
    {
        $carConstructor = new Renault();
        $megane = $carConstructor->buildCar(Megane::class);
        $megane->build();
        $clio = $carConstructor->buildCar(Clio::class);
        $clio->build();

        $this->assertEquals(true, $megane->getTyres() instanceof MichelinTyres);
        $this->assertEquals(true, $megane->getEngine() instanceof RenaultEngine);

        $this->assertEquals(true, $clio->getTyres() instanceof ContinentalTyres);
        $this->assertEquals(true, $clio->getEngine() instanceof HondaEngine);
    }
}