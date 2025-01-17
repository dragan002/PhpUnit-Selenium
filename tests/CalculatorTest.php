<?php

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase 
{
    public $calculator;

    protected function setUp(): void
    {
        $this->calculator = new Calculator;
    }

    /**
     * @dataProvider additionProvider
     */
    public function testAdd($a, $b, $expected)
    {
        $result = $this->calculator->add($a, $b);
        $this->assertEquals($expected, $result);
    }

    public static function additionProvider()
    {
        return [
            'both positive' => [2, 3, 5],
            'positive and negative' => [2, -3, -1],
            'both negative' => [-2, -3, -5],
            'zero and positive' => [0, 5, 5],
            'zero and negative' => [0, -5, -5],
        ];
    }

    /** 
    * @dataProvider subtractProvider
    */

    public function testSubtract($a, $b, $expected)
    {
        if($a < 0){
            $this->expectException(InvalidArgumentException::class);
            $this->expectExceptionMessage('First number must be positive');
        }
        $result = $this->calculator->subtract($a, $b);
        $this->assertEquals($expected, $result);
    }

    public static function subtractProvider()
    {
        return [
            'positive and positive' => [5, 3, 2],
            'positive and negative' => [5, -3, 8],
            'negative and positive' => [-5, 3, -8],
            'negative and negative' => [-5, -3, -2],
            'zero and positive'     => [0, 5, -5],
            'zero and negative'     => [0, -5, 5],
        ];
    }

    public function testSubtractNegativeFirstNumber()
    {
    $this->expectException(InvalidArgumentException::class);
    $this->expectExceptionMessage('First number must be positive');
    $this->calculator->subtract(-5, 3);
    }

    /** 
     * @dataProvider multiplyProvider 
     */ 

    public function testMultiply($a, $b, $expected) 
    {
        $result = $this->calculator->multiply($a, $b);
        $this->assertEquals($expected, $result);
    }

    public static function multiplyProvider() {
        return [
            'positive and positive' => [2, 3, 6],
            'positive and negative' => [2, -3, -6],
            'negative and positive' => [-2, 3, -6],
            'negative and negative' => [-2, -3, 6],
            'zero and positive' => [0, 5, 0],
            'zero and negative' => [0, -5, 0],
        ];
    }

    /**
     * @dataProvider  divideProvider
     */

    public function testDivide($a, $b, $expected) 
    {
        $result = $this->calculator->divide($a, $b);
        $this->assertEquals($expected, $result);
    }

    public static function divideProvider()
    {
        return [
            'positive and positive' => [90, 3, 30],
            'positive and negative' => [90, -3, -30],
            'negative and positive' => [-90, 3, -30],
            'negative and negative' => [-90, -3, 30],
        ];
    }

    /**
     * @dataProvider  powerProvider
     */
    public function testPower($a, $expected) {
        $result = $this->calculator->power($a);
        $this->assertEquals($expected, $result);
    }

    public static function powerProvider() {
        return [
            'positive' => [2, 4],
            'negative' => [-2, 4],
            'zero' => [0, 0],
            ];
    }

    public function testDivideByZero()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Dividing by 0 is always 0');
        $this->calculator->divide(10, 0);  
    }
}