<?php

namespace MPierron\Factory\Tests;

use PHPUnit\Framework\TestCase;
use MPierron\ConcreteProduct\Clio;
use MPierron\ConcreteProduct\Megane;
use MPierron\ConcreteFactory\Renault;

class FactoryTest extends TestCase {

    public function testFactoryPattern()
    {
        $carConstructor = new Renault();
        $megane = $carConstructor->buildCar(Megane::class);

        $this->assertEquals(true, $megane instanceof Megane);
    }

    public function testIfCarsCanBeAssembledDifferently()
    {
        $carConstructor = new Renault();
        $megane = $carConstructor->buildCar(Megane::class);
        $clio = $carConstructor->buildCar(Clio::class);

        $this->assertEquals("how the fuck is a megane assembled ?", $megane->assemble());
        $this->assertEquals("same question", $clio->assemble());
    }
}