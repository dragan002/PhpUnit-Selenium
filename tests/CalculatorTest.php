<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    public $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }

    public function testAdd()
    {
        $this->assertEquals(5, $this->calculator->add(2, 3));
    }

    public function testSubtract()
    {
        $this->assertEquals(22, $this->calculator->subtract(30, 8));
    }

    public function testMultiply() {
        $this->assertEquals(20, $this->calculator->multiply(10, 2));
    }

    public function testDivide() {
        $this->assertEquals(30, $this->calculator->divide(90, 3));
    }
}