<?php

namespace MPierron\ConcreteProduct;

use MPierron\Product\Tyres;

class ContinentalTyres implements Tyres
{
    public function getDescription(): string
    {
        return "ContinentalTyres description";
    }
}