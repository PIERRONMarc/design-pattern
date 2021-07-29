<?php

namespace App\Adapter;

class CircleAdapter implements SquareInterface 
{
    private $circle;

    public function __construct(CircleInterface $circle)
    {
        $this->circle = $circle;
    }

    public function getWidth(): float
    {
        return $this->circle->getDiameter();
    }
}