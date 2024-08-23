<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase 
{
    public $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator;
    }

    public function testAdd() {
        $result = $this->calculator->add(2,3);
        $this->assertEquals(5, $result, 'Adding 2 + 3 = 5');
    }

    public function testSubtract()
    {
        $result = $this->calculator->subtract(5, 3);
        $this->assertEquals(2, $result, "5 - 3 has to be 2");
    }


    public function testMultiply() 
    {
        $result = $this->calculator->multiply(10, 2);
        $this->assertEquals(20, $result, 'Multiplying 10 by 2 should equal 20');
    }

    public function testDivide() 
    {
        $result = $this->calculator->divide(90, 3);
        $this->assertEquals(30, $result, 'Dividing 90 by 3 should equal 30');
    }

    public function testPower() {
        $this->assertEquals(9, $this->calculator->power(3));
    }
}