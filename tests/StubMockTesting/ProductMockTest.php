<?php

use forStubMockTesting\Logger;
use forStubMockTesting\Product;
use PHPUnit\Framework\TestCase;

class ProductMockTest extends TestCase {
    
    public function testSaveProduct()
    {
        $loggerMock = $this->createMock(Logger::class);
        $loggerMock->expects($this->once())
            ->method('log')
            ->with(
                $this->equalTo('Error:'),
                $this->anything()
            );

        $product = new Product($loggerMock);
        // Assume `saveProduct` returns false based on input parameters.
        $this->assertFalse($product->saveProduct("panasonics", "ok"));
    }

    public function testSaveProduct2()
    {
        $loggerMock = $this->createMock(Logger::class);
        $loggerMock->method('log')
            ->willReturnCallback(function($type, $message) {
                static $count = 0;
                ++$count;
                if ($count === 1) {
                    $this->assertEquals('notice', $type);
                    $this->assertStringContainsString('Price is greater than 10', $message);
                } elseif ($count === 2) {
                    $this->assertEquals('success', $type);
                    $this->assertStringContainsString('Product saved Successfully', $message);
                }
            });

        $product = new Product($loggerMock);
        // Assuming `saveProduct` triggers both logs as defined above.
        $product->saveProduct("Panasonics", 22);
    }
}
