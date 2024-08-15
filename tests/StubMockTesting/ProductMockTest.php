<?php

use forStubMockTesting\Logger;
use forStubMockTesting\Product;
use PHPUnit\Framework\TestCase;

class ProductMockTest extends TestCase {
    
    public function testSaveProduct()
    {
        // $logger = new Logger;

        // $product = new Product($logger);

        // $this->assertTrue($product->saveProduct('Panasonics', 22));

        $loggerMock = $this->createMock(Logger::class);
        $loggerMock->expects($this->once())
        ->method('log')
        ->with(
            $this->equalTo('Error:'),
            $this->anything()
        );

        $product = new Product($loggerMock);
        $this->assertFalse($product->saveProduct("panasonics", "ok"));
    }

    public function testSaveProduct2()
    {
        $loggerMock = $this->createMock(Logger::class);
        $loggerMock->expects($this->exactly(2))
            ->method('log')
            ->withConsecutive(
                [$this->equalTo('notice'), $this->stringContains('Price is greater than 10')],
                [$this->equalTo('success'), $this->stringContains('Product saved successfully')]
            );
        
        $product = new Product($loggerMock);
        $product->saveProduct("Panasonics", 22);  // Ensure that the product price triggers the 'notice' log
    }
}