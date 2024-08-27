<?php

use PHPUnit\Framework\TestCase;

class UserManagerTest extends TestCase 
{
    public function testAddUserThrowsExceptionIfUsernameTaken()
{
    // Mock the Logger class
    $loggerMock = $this->createMock(Logger::class);

    // Mock the Database Connection
    $dbMock = $this->createMock(PDO::class);

    // Mock the Statement object returned by the database
    $stmtMock = $this->createMock(PDOStatement::class);
    $stmtMock->method('fetch')->willReturn(true); // Simulate existing user

    // Mock the preparation and execution of SQL statements
    $dbMock->method('prepare')->willReturn($stmtMock);

    // Inject the mock logger and database into UserManager
    $userManager = new UserManager($dbMock, $loggerMock);

    $this->expectException(Exception::class);
    $this->expectExceptionMessage('Username already taken');

    // Call the method under test, which should throw an exception
    $userManager->addUser('john_doe');
}
}
