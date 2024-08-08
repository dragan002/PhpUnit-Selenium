<?php

namespace App\Fixture;

use App\ShopingCart;
use PHPUnit\Framework\TestCase;
use tests\Traits\DatabaseTrait;
use tests\Traits\ShoppingCartFixtureTrait;

class ShopingCartTestWithTraitsTest extends TestCase {


    use DatabaseTrait;
    use ShoppingCartFixtureTrait;

    public function testCorrectNumberOfItems()
    {
        $expected = 1;
        $this->cart->addItem('one');
        $result = $this->cart->amount;
        $this->assertEquals($expected, $result);
    }

    public function testCorrectProductName()
    {
        $this->cart->addItem('Apple');
        $this->assertContains('Apple', $this->cart->cartItems);
    }
}