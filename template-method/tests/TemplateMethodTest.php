<?php

namespace App\Tests;

use App\Tea;
use App\Coffee;
use PHPUnit\Framework\TestCase;

class TemplateMethodTest extends TestCase
{
    public function testToMakeDrink()
    {
        $coffee = new Coffee();
        $tea = new Tea();
        $this->assertEquals(true, $coffee->make());
        $this->assertEquals(true, $tea->make());
    }

    public function testToAddExtras()
    {
        $coffee = new Coffee();
        $tea = new Tea();
        $coffee->make();
        $tea->make();

        $this->assertEquals(true, in_array('sugar', $coffee->getExtras()));
        $this->assertEquals(true, in_array('honey', $tea->getExtras()));
    }
}