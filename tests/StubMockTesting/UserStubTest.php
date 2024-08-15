<?php

use forStubMockTesting\User;
use PHPUnit\Framework\TestCase;

class UserStubTest extends TestCase 
{
    public function testUserStub()
    {
        // Create a stub for the User class.
        $stub = $this->createStub(User::class);

        // Configure the stub.
        $stub->method('save')->willReturn(true);
        $stub->method('createUser')->willReturn(true);
        
        // Assert the stub's method returns the expected value.
        $this->assertTrue($stub->createUser('Dragan', 'test@gmail.com'));
    }
}
