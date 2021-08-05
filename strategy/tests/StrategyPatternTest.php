<?php

namespace App\Tests;

use App\Context\Navigator;
use App\Strategy\BusStrategy;
use App\Strategy\CarStrategy;
use PHPUnit\Framework\TestCase;

class StrategyPatternTest extends TestCase
{
    public function testNavigatorWithCar()
    {
        $navigator = new Navigator();
        $navigator->setRouteStrategy(new CarStrategy());
        
        $this->assertEquals('route to Paris in car', $navigator->routeTo('Paris'));
    }

    public function testNavigatorWithBus()
    {
        $navigator = new Navigator();
        $navigator->setRouteStrategy(new BusStrategy());
        
        $this->assertEquals('route to Paris in bus', $navigator->routeTo('Paris'));
    }
}
