<?php

namespace App\Adapter;

class Circle implements CircleInterface
{
    private $diameter;

    public function __construct(float $diameter)
    {
        $this->diameter = $diameter;
    }

    public function getDiameter(): float
    {
        return $this->diameter;
    }
}