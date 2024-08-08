<?php

use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    public function testValidEmail()
    {
        $this->assertMatchesRegularExpression('/^.+\@\S+\.\S+$/', 'draganvujic29@gmail.com');
    }
}