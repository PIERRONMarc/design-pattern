<?php

namespace MPierron\Decorator\Tests;

use MPierron\Decorator\Drink;
use MPierron\Decorator\IngredientDecorator;
use PHPUnit\Framework\TestCase;

class DrinkInterfaceTest extends TestCase{

    public function testDrinkAbstractClass() 
    {
        $drink = new Class("Coca-Cola") extends Drink {
            private $price = 10;

            public function getPrice(): float
            {
                return $this->price;
            }

        };

        $this->assertEquals(10, $drink->getPrice());
        $this->assertEquals("Coca-Cola", $drink->getDescription());
    }

    public function testIfDrinkIsDecorated()
    {
        $rhum = new Class("Rhum") extends Drink {
            private $price = 10;

            public function getPrice(): float
            {
                return $this->price;
            }

        };

        $rhumCoca = new Class($rhum) extends IngredientDecorator {
            private $price = 3;

            public function getPrice(): float
            {
                return $this->drink->getPrice() + $this->price;
            }

            public function getDescription(): string
            {
                return $this->drink->getDescription() . " Coca-Cola"; 
            }
        };

        $rhumCocaIce = new Class($rhumCoca) extends IngredientDecorator {
            private $price = 1;

            public function getPrice(): float
            {
                return $this->drink->getPrice() + $this->price;
            }

            public function getDescription(): string
            {
                return $this->drink->getDescription() . " Ice"; 
            }
        };

        $this->assertEquals(14, $rhumCocaIce->getPrice());
        $this->assertEquals("Rhum Coca-Cola Ice", $rhumCocaIce->getDescription());
    }
}