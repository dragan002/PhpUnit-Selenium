<?php

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase 
{
    public function testProduct()
    {
        // $product = new Product(new Session);

        $session = new class implements SessionInterface {

            public function open(){}

            public function close(){}

            public function write(string $product): void
            {
                echo "Mocked writing to the session";
            }
        };

        $product = new Product($session);

        $this->assertSame('product 1', $product->fetchProductById(1));
    }

    public function testProductSecond()
    {
        $session = $this->createMock(SessionInterface::class);
        $session->expects($this->once())
        ->method('write')
        ->with($this->equalTo('product 1'))
        ->willReturn('Mocked writting to the session');

        $product = new Product($session);

        $result = $product->fetchProductById(1);
        $this->assertSame('product 1', $result);
    }
}