<?php

use PHPUnit\Framework\TestCase;

class ShoppingCartTest extends TestCase
{

    protected $cart;
    
    public function testCorrectNumberOfItems() 
    {

        $this->cart->addItem("ss");

        $expected = 1;

        $result = $this->cart->amount;

        $this->assertEquals($expected, $result);
    }
}