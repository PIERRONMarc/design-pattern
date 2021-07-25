<?php

namespace MPierron\AbstractFactory;

use MPierron\Product\Tyres;
use MPierron\Product\Engine;

interface CarParts
{
    public function createEngine(): Engine;
    public function createTyres(): Tyres;
}