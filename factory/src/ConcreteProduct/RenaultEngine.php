<?php

namespace MPierron\ConcreteProduct;

use MPierron\Product\Engine;

class RenaultEngine implements Engine
{
    public function getDescription(): string
    {
        return "RenaultEngine description";
    }
}