<?php

namespace MPierron\Factory\Tests;

use MPierron\Product\Clio;
use MPierron\Product\Megane;
use MPierron\Factory\Renault;
use PHPUnit\Framework\TestCase;

class RaceTest extends TestCase {

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