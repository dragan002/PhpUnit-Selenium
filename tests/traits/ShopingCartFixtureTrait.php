<?php


namespace App\Tests\Traits;

use App\ShoppingCart;

trait ShoppingCartFixtureTrait {

    protected $cart;

    protected function setUp(): void
    {
        $this->cart = new ShoppingCart();
    }

    protected function tearDown(): void
    {
        unset($this->cart);
    }
}