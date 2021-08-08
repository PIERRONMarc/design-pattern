<?php

namespace App\Tests;

use App\Leaf\Service;
use App\Composite\Department;
use PHPUnit\Framework\TestCase;

class CompositePatternTest extends TestCase
{
    public function testDepartmentCreation()
    {
        $direction = new Department('Board of directors', '/BOD', 5);

        $this->assertEquals('Board of directors', $direction->getName());
        $this->assertEquals('/BOD', $direction->getPath());
        $this->assertEquals(5, $direction->getEmployeesCount());
    }

    public function testServiceCreation()
    {
        $humanResources = new Service('Human resources', '/BOD/HR', 10);

        $this->assertEquals('Human resources', $humanResources->getName());
        $this->assertEquals('/BOD/HR', $humanResources->getPath());
        $this->assertEquals(10, $humanResources->getEmployeesCount());
    }

    public function testCountAllEmployeesWithCompositePattern()
    {
        $direction = new Department('Board of directors', '/BOD', 5);

        $humanResources = new Service('Human resources', '/HR', 10);

        $productDept = new Department('Product department', '/BOD/Product', 5);
        $marketing = new Service('Marketing', '/BOD/Product/Marketing', 10);
        $researchAndDevelopment = new Service('Researche and Develoment', '/BOD/Product/R&D', 20);
        $productDept->addChild($marketing);
        $productDept->addChild($researchAndDevelopment);

        $direction->addChild($humanResources);
        $direction->addChild($productDept);

        $this->assertEquals(50, $direction->getAllEmployeesCount());
        $this->assertEquals(35, $productDept->getAllEmployeesCount());
        $this->assertEquals(10, $marketing->getAllEmployeesCount());
    }
}