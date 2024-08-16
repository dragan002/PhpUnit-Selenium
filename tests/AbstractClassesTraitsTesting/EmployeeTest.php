<?php

use forTestingAbstractClasseAndTraits\PersonAbstract;
use PHPUnit\Framework\TestCase;

class EmployeeTest extends TestCase {
    public function testFullName() {
        $mock = $this->getMockBuilder(PersonAbstract::class)
                     ->setConstructorArgs(['Pero', 'Peric'])
                     ->onlyMethods(['getSalary'])
                     ->getMock(); 

        $mock->method('getSalary')->willReturn(6000);

        $this->assertSame('Pero Peric earns 6000 per month', $mock->showFullNameAndSalary());    }
}

