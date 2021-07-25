<?php

namespace MPierron\Singleton\Tests;

use PHPUnit\Framework\TestCase;
use MPierron\Singleton\Singleton;

class SingleTest extends TestCase
{
    public function testSingleton()
    {
        $singleton = Singleton::getInstance();
        $singleton->update();
        $secondSingletonCall = Singleton::getInstance();

        $this->assertEquals(true, $secondSingletonCall->getIsUpdated());
    }

}