<?php

use forTestingAbstractClasseAndTraits\MyTrait;
use PHPUnit\Framework\TestCase;


class MyClass {
    use MyTrait;
}

class MyTraitTest extends TestCase
{
    public function testMyTrait(): void {
        $mock = $this->getMockBuilder(MyClass::class)
                     ->onlyMethods(['traitMethod'])
                     ->getMock();

        $mock->method('traitMethod')->willReturn(30);

        $this->assertSame(30, $mock->traitMethod(20));
    }
}