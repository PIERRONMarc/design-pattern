<?php

namespace MPierron\ConcreteProduct;

use MPierron\Product\Tyres;

class MichelinTyres implements Tyres
{
    public function getDescription(): string
    {
        return "MichelinTyres description";
    }
}