<?php

class Product {


    public function __construct(private SessionInterface $session)
    {
        $this->session = $session;
    }

    public function fetchProductById(int $id): string
    {
        $product = 'product 1';
        
        $this->session->write($product);

        return $product;
    }
}