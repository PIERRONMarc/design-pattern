<?php

namespace App\Strategy;

interface RouteStrategy
{
    public function getRoute(string $city): string;
}