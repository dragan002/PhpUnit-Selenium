<?php

use App\BMICalculator;
use PHPUnit\Framework\TestCase;

class BMICalculatorTest extends TestCase
{

    protected $bmiCalculator; 
    protected $result;

    protected function setUp(): void
    {
        $this->bmiCalculator = new BMICalculator();

    }


    public function testShowsUnderWeightWhenBMIIsUnder18()
    {
        $this->bmiCalculator->BMI = 10;
        
        $this->result = $this->bmiCalculator->getTextResultFromBMI();

        $expected = "Underweight";
        
        $this->assertSame($expected, $this->result);
    }


     public function testShowsNormalWeightWhenBMIIsBetween18And25()
     {
        $this->bmiCalculator->BMI = 20;

        $this->result = $this->bmiCalculator->getTextResultFromBMI();

        $expected = "Normal";

        $this->assertSame($expected, $this->result);

     }


     public function testShowsOverWeightWhenBMIIsGreatherThen25() {

        $this->bmiCalculator->BMI = 26;

        $this->result = $this->bmiCalculator->getTextResultFromBMI();

        $expected = "Overweight";

        $this->assertSame($expected, $this->result);

     }

     public function testShowsCalculateCorrectBMI() {
        $this->bmiCalculator->mass = 100;
        $this->bmiCalculator->height = 1.6;

        $this->result = $this->bmiCalculator->calculate();

        $expected = 39.1;

        $this->assertEquals($expected, $this->result);

        $this->assertEquals(constant('BASEURL'), 'http://localhost:8000');   }
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


