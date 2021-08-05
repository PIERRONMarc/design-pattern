<?php

namespace App\Strategy;

class BusStrategy implements RouteStrategy
{
    public function getRoute(string $city): string
    {
        return "route to $city in bus";
    }
}