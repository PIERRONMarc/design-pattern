<?php

namespace App;

abstract class CaffeineDrink
{
    protected $extras;

    public function __construct()
    {
        $this->extras = array();
    }

    final function make()
    {
        $this->boilWater();
        $this->prepare();
        $this->pourIntoACup();
        $this->addExtras();

        return true;
    }

    private function boilWater()
    {
        return "boil water";
    }

    abstract function prepare();

    private function pourIntoACup()
    {
        return "pouring into a cup";
    }

    abstract function addExtras();

    public function getExtras(): array
    {
        return $this->extras;
    }
}