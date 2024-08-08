<?php

use PHPUnit\Framework\TestCase;

class DependenciesTest extends TestCase
{
    private $value;

    public function testFirstTest()
    {
        $this->value = 1;

        $this->assertEquals(1, $this->value);

        return $this->value;
    }

    /**
     * @depends testFirstTest
     */
    public function testDependencyTest1($value) 
    {
        $value++;

        $expected = 2;

        $result = $value;

        $this->assertEquals($expected, $result);

        return $value;
    }

        /**
     * @depends testDependencyTest1
     */

    public function testDependencyTest2($value)
    {
        $value++;

        $expected = 3;

        $result = $value;

        $this->assertEquals($expected, $result);

        return $value;
    }

    /**
     * @depends testDependencyTest2
     */

    public function testDependencyTest3($value)
    {
        $value--;

        $expected = 2;

        $result = $value;

        $this->assertEquals($expected, $result);

        return $value;
    }

        /**
     * @depends testDependencyTest3
     */

     public function testDependencyTest4($value)
     {
         $value = pow($value, 3);
 
         $expected = 8;
 
         $result = $value;
 
         $this->assertEquals($expected, $result);
     }
}