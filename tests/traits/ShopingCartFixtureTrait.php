<?php


namespace tests\Traits;

use App\ShopingCart;

trait ShoppingCartFixtureTrait 
{
    protected $cart;

    protected function setUp(): void 
    {
        $this->cart = new ShopingCart();
    }

    protected function tearDown(): void 
    {
        unset($this->cart);
    }
}