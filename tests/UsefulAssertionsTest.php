<?php
use App\BMIcalculator;
use PHPUnit\Framework\TestCase;

class UsefulAssertionsTest extends TestCase
{

    public function testAssertSame()
    {
        $expected = 'baz';

        $result = 'baz';

        $this->assertSame($expected, $result);
    }

    public function testAssertEquals()
    {
        $expected = 2;

        $result = 2;

        $this->assertEquals($expected, $result);
    }

    public function testAssertEmpty()
    {
       $this->assertEmpty([]);
    }

    public function testAssertNull()
    {
       $this->assertNull(null);
    }

    public function testAssertGreatherThan()
    {
        $expected = 1;

        $result = 2;

        $this->assertGreaterThan($expected, $result);
    }

    public function testAssertFalse()
    {
       $this->assertFalse(false);
    }

    public function testAssertCount()
    {
       $this->assertCount(3,[0, 323, 3234]);
    }

    public function testAssertContains()
    {
       $this->assertContains(3,[0, 323, 3234, 3]);
    }

    public function testAssertStringContainsString()
    {
        $searchFor = 'foo';

        $searchIn = 'foormersi';

        $this->assertStringContainsString($searchFor, $searchIn);
    }

    public function testAssertInstanceOf()
    {
        $this->assertInstanceOf(BMIcalculator::class, new BMIcalculator);
    }

    public function testAssertArrayHasKey() 
    {
        $this->assertArrayHasKey("baze", ["baze" => '118']);
    }

    public function testAssertDirectoryIsWritable()
    {
        $this->assertDirectoryIsWritable(__DIR__);
    }
}