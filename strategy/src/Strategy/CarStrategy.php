<?php

namespace App\Strategy;

class CarStrategy implements RouteStrategy
{
    public function getRoute(string $city): string
    {
        return "route to $city in car";
    }
}