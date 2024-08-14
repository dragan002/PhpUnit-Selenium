<?php

class Product extends ProductAbstract {


    protected $addLoggerCallable = [Logger::class, 'log'];

    public function setLoggerCallable(callable $callable)
    {
        $this->addLoggerCallable = $callable;
    }
    
    public function __construct(private SessionInterface $session)
    {
        $this->session = $session;
    }

    public function fetchProductById(int $id): string
    {
        $product = 'product 2';
        
        $this->session->write($product);

        call_user_func($this->addLoggerCallable, $product);
        // Logger::log($product);

        return $product;
    }
}