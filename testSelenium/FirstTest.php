<?php

use PHPUnit\Framework\TestCase;
use Facebook\WebDriver\WebDriverBy;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\DesiredCapabilities;

class FirstTest extends TestCase {

    protected $webDriver;

    public function setUp(): void {
        $host = 'http://localhost:4444'; // Selenium server
        $capabilities = DesiredCapabilities::firefox();
        $this->webDriver = RemoteWebDriver::create($host, $capabilities);
        $this->webDriver->get("http://127.0.0.1:5500/src/testingHtmlPage.html");
    }

    /**
     * @covers FirstTest::testTitle
     */
    // public function testTitle() {
    //     $title = $this->webDriver->getTitle();
    //     $this->assertEquals('HTML by Adam Morse, mrmrs.cc', $title);
    // }

       /**
     * @covers firstTest::testGettingElementsH1
     */

    // public function testGettingElementsH1() 
    // {
    //     $h1 = $this->webDriver->findElement(WebDriverBy::cssSelector('header h1'));
    //     $h1Text = $h1->getText();
    //     $this->assertEquals('HTML', $h1Text);
    // }

           /**
     * @covers firstTest::testGettingElementsA
     */

    // public function testGettingElementsA()
    // {
    //     $a = $this->webDriver->findElement(WebDriverBy::cssSelector('ul li a'));
    //     $aText = $a->getText();
    //     $this->assertEquals('Home', $aText);
    // }

    /**
     * @covers firstTest::testGettingNoNOrderElementsA
     */

    //  public function testGettingNoNOrderElementsA() {
    //      $a2 = $this->webDriver->findElement(WebDriverBy::cssSelector('ul li:nth-of-type(2) a'));
    //      $a2Text = $a2->getText();
    //      $this->assertEquals('About', $a2Text);
    //  }

                /**
     * @covers firstTest::testAllLinks
     */

    //  public function testAllTags() {
    //     $tags = $this->webDriver->findElements(WebDriverBy::cssSelector('a'));
    //     foreach($tags as $index => $tag) {
    //         $tagText = $tag->getText();
    //         echo "Tag {$index}: {$tagText}\n";
    //     }

    //     $this->assertGreaterThan(0, count($tags), "No <a> tags found on the page.");
    // }

    /**
     * @covers firstTest::testById
     */

     public function testById() {
        // Find the input element with the ID 'Adam'
        $element = $this->webDriver->findElement(WebDriverBy::id('Adam'));
    
        // Get the value of the input element
        $inputValue = $element->getAttribute('id');
    
        // Assert that the value of the input element is 'Adam'
        $this->assertEquals('Adam', $inputValue);
    }
    

    public function tearDown(): void {
        $this->webDriver->quit();
    }
}
