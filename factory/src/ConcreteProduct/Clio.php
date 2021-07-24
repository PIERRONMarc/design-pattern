<?php

namespace MPierron\ConcreteProduct;

use MPierron\Product\Car;

class Clio extends Car 
{
    public function assemble(): string
    {
        return "same question";
    }
}