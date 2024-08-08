<?php

use App\BMIcalculator;
use PHPUnit\Framework\TestCase;

class ErrorExceptionsTest extends TestCase 
{
    public function testErrorCanBeExpected(): void 
    {
        $this->expectException(Exception::class);
        throw new Exception("foo");
    }

    public function testException() 
    {
        $this->expectException(WrongBMIDataException::class);
        $BMIcalculator = new BMIcalculator;

        $BMIcalculator->mass = 2;
        $BMIcalculator->height = 0;

        $BMIcalculator->calculate();
    }
}