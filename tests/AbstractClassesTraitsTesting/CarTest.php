<?php

use PHPUnit\Framework\TestCase;
use forTestingAbstractClasseAndTraits\Car;
use forTestingAbstractClasseAndTraits\CarAbstract;

class CarTest extends TestCase {

    public function testDetails()
    {
        $car = new Car('Golf 6', 2011);

        // Test showCarDetails
        $this->assertSame('Golf 6 has produced 2011 and brand new price is $100', $car->showCarDetails());

        // Test showTaxes with a rate of 2%
        $this->assertSame('Regular tax on price of $100 is $2', $car->showTaxes(2));

        // Directly test the calculateTax method from the trait
        // $this->assertSame(2, $car->calculateTax(2));
    }
}