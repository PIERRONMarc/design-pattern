<?php

namespace MPierron\ConcreteProduct;

use MPierron\Product\Engine;

class HondaEngine implements Engine
{
    public function getDescription(): string
    {
        return "HondaEngine description";
    }
}