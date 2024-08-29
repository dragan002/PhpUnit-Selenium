<?php
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\WebDriverBy;
use PHPUnit\Framework\TestCase;

class SeleniumTest extends TestCase
{
    protected $webDriver;

    protected function setUp(): void
    {
        $host = 'http://localhost:4444'; // Selenium server URL
        $capabilities = DesiredCapabilities::firefox(); // or chrome()
        $this->webDriver = RemoteWebDriver::create($host, $capabilities);
    }

    public function testTitle()
    {
        $this->webDriver->get('https://www.example.com');
        $title = $this->webDriver->getTitle();
        $this->assertEquals('Example Domain', $title);
    }

    protected function tearDown(): void
    {
        $this->webDriver->quit();
    }
}
