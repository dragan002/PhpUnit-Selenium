<?php

namespace forStubMockTesting;

use forStubMockTesting\Logger;


class Product
{
    protected $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function saveProduct($name, $price)
    {
        if(!is_string($name))
        {
            $this->logger->log('Error:',  'Product name must be a string.');
            return false;
        } elseif(!is_int($price))
        {
            $this->logger->log('Error:',  'Product price must be an integer.');
            return false;
        }

        if($price > 10)
        {
            $this->logger->log('notice', 'Price is greater than 10');
        }

        $this->logger->log('success', 'Product saved Successfully');
        return true;

    }
}