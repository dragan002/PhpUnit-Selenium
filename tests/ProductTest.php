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

        $product->setLoggerCallable(function(){
            echo " Real logger was not called";
        });

        $this->assertSame('product 2', $product->fetchProductById(1));
    }

    public function testProductSecond()
    {
        $session = $this->createMock(SessionInterface::class);
        $session->expects($this->once())
        ->method('write')
        ->with($this->equalTo('product 2'))
        ->willReturn('Mocked writting to the session');

        $product = new Product($session);

        $result = $product->fetchProductById(1);
        $this->assertSame('product 2', $result);
    }

    public function testIncompletedAndSkipped()
    {
        
        if(!extension_loaded('xdebug'))
        {
            $this->markTestSkipped('xDebug Extension not available');
        }  

        $this->markTestIncomplete('This is not completed');
    }


}