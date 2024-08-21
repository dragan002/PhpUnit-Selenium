<?php

use PHPUnit\Framework\TestCase;
use forTestingAbstractClasseAndTraits\CarAbstract;

class CarTest extends TestCase {

    public function testDetails()
    {
        $mock = $this->getMockBuilder(CarAbstract::class)
        ->setConstructorArgs(['Golf 6', 2011])
        ->onlyMethods(['getPrice'])
        ->getMock();

        $mock->method('getPrice')->willReturn(4000);

        $this->assertSame('Golf 6 has produced 2011 and brand new price is $4000', $mock->showCarDetails());
    }
}