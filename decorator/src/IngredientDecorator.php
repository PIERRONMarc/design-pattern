<?php

namespace MPierron\Decorator;

use MPierron\Decorator\Drink;

abstract class IngredientDecorator extends Drink {
    protected $drink;

    public function __construct($drink)
    {
        $this->drink = $drink;
    }
}