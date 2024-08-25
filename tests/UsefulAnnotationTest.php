<?php

use PHPUnit\Framework\TestCase;

class UsefulAnnotationTest extends TestCase {

    private $value;

    /** 
     * @before
    */
    public function renBeforeEachTestMethod() {
        $this->value++;
    }

    /**
     * @after
     */
     public function runAfterEachTestMethod()
     {
        unset($this->value);
     }

    public function testAnnotation1()
    {
        $this->value++;

        $expected = 2;

        $result = $this->value;

        $this->assertEquals($expected, $result);
    }

    public function testAnnotation2() {
        $this->value++;

        $expected = 2;

        $result = $this->value;

        $this->assertEquals($expected, $result);
    }

}