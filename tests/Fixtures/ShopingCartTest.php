<?php

use App\ShopingCart;
use PHPUnit\Framework\TestCase;

class ShopingCartTest extends TestCase
{

    protected $cart;
    
    public function testCorrectNumberOfItems() 
    {
        $this->cart->addItem('one');

        $expected = 1;

        $result = $this->cart->amount;

        $this->assertEquals($expected, $result);
    }
}