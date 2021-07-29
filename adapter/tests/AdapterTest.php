<?php

namespace App\Adapter\Tests;

use App\Adapter\Circle;
use App\Adapter\CircleAdapter;
use PHPUnit\Framework\TestCase;

class AdapterTest extends TestCase
{
    public function testAdapter()
    {
        $circle = new Circle(10);
        $this->assertEquals(10, $circle->getDiameter());

        // circle is now a square
        $circleAdapter = new CircleAdapter($circle);
        $this->assertEquals(10, $circleAdapter->getWidth());
    }

}