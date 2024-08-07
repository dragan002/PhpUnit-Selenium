<?php

use App\BMIcalculator;
use PHPUnit\Framework\TestCase;

class BMIcalculatorTest extends TestCase
{
    protected $bmiCalculator; 
    protected $result;

    protected function setUp(): void
    {
        $this->bmiCalculator = new BMIcalculator();

    }


    public function testUnderWeightBMITextResult()
    {
        $this->bmiCalculator->BMI = 10;
        
        $this->result = $this->bmiCalculator->getTextResultFromBMI();

        $expected = "Underweight";
        
        $this->assertSame($expected, $this->result);
    }


     public function testNormalWeightBMITestResult()
     {
        $this->bmiCalculator->BMI = 20;

        $this->result = $this->bmiCalculator->getTextResultFromBMI();

        $expected = "Normal";

        $this->assertSame($expected, $this->result);

     }


     public function testOverWeightBMITestResult() {

        $this->bmiCalculator->BMI = 26;

        $this->result = $this->bmiCalculator->getTextResultFromBMI();

        $expected = "Overweight";

        $this->assertSame($expected, $this->result);

     }

     public function testCorrectBMIValue() {
        $this->bmiCalculator->mass = 100;
        $this->bmiCalculator->height = 1.6;

        $this->result = $this->bmiCalculator->calculate();

        $expected = 39.1;

        $this->assertEquals($expected, $this->result);
     }
}

// class BMICalculatorTest extends TestCase
// {
//     /**
//      * @covers BMICalculator::getTextResultFromBMI
//      * @dataProvider provideBMIData
//      */
//     public function testGetTextResultFromBMIReturnsExpectedResult($bmi, $expectedResult)
//     {
//         $calculator = new BMICalculator();
//         $calculator->BMI = $bmi;
//         $result = $calculator->getTextResultFromBMI();
//         $this->assertEquals($expectedResult, $result);
//     }

//     public function provideBMIData()
//     {
//         return [
//             [10, 'Underweight'],
//             [20, 'Normal'],
//             [26, 'Overweight'],
//         ];
//     }
// }


