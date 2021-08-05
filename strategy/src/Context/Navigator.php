<?php

namespace App\Context;

use App\Strategy\RouteStrategy;

class Navigator
{
    private $routeStrategy;

    public function setRouteStrategy(RouteStrategy $routeStrategy)
    {
        $this->routeStrategy = $routeStrategy;
    }

    public function routeTo($city)
    {
        // do certain things 

        return $this->routeStrategy->getRoute($city);
    }
}