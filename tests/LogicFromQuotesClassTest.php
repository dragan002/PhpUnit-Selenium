<?php

use PHPUnit\Framework\TestCase;

class LogicFromQuotesClassTest extends TestCase 
{
    public function testLogicFromQuotesClass()
    {
        $data_source = new class extends DataSource {
            public function fetchQuote($person)
            {
                return '';
            }
        };
        $obj = new UnitTestable($data_source);

        $obj->setRandomNumber(0);
        $this->assertSame('Today the quote from one the famous physicist Albert Einstein: ', $obj->getRandomQoute());

        $obj->setRandomNumber(1);
        $this->assertSame('Today the quote from head of the Catholic Church and sovereign of the Vatican City Pope John Paul II: ', $obj->getRandomQoute());

        $obj->setRandomNumber(2);
        $this->assertSame('Today the quote from the co-founder of Microsoft Corporation Bill Gates: ', $obj->getRandomQoute());
    }
}