<?php

use PHPUnit\Framework\TestCase;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;

class FirstTest extends TestCase {

    protected $webDriver;

    public function setUp(): void {
        $host = 'http://localhost:4444'; // Selenium server
        $capabilities = DesiredCapabilities::firefox();
        $this->webDriver = RemoteWebDriver::create($host, $capabilities);
        $this->webDriver->get("http://www.google.com/");
    }

    /**
     * @covers FirstTest::testTitle
     */
    public function testTitle() {
        $title = $this->webDriver->getTitle();
        $this->assertEquals('Google', $title);
    }

    public function tearDown(): void {
        $this->webDriver->quit();
    }
}
