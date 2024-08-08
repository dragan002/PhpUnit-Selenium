<?php

use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    /**
     * @dataProvider emailsProvider
     */
    public function testValidEmail($email)
    {
        $this->assertMatchesRegularExpression('/^.+\@\S+\.\S+$/', $email);
    }

    public static function emailsProvider()
    {
        return [
            ['draganvujic29@gmail.com'],
            ['example2@gmail.com'],
            ['example3@yahoo.com'],
        ];
    }

    /**
     * @dataProvider numbersProvider
     */
    public function testMath($a, $b, $expected)
    {
        $this->assertEquals($expected, $a + $b);
    }

    public static function numbersProvider()
    {
        return [
            [1, 1, 2],
            [2, 2, 4],
            [3, 3, 6]
        ];
    }
}
