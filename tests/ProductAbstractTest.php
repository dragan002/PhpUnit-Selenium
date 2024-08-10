<?php

use PHPUnit\Framework\TestCase;

class ProductAbstractTest extends TestCase {

    public function testProductAbstract()
    {
        $productAbstract = new class extends ProductAbstract {};

        $this->assertSame('do something', $productAbstract->doSomething());
    }
}