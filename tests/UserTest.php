<?php

use PHPUnit\Framework\TestCase;
use App\User;  // Ensure User class is under the App namespace and correctly imported.

class Database 
{
    public function getEmailAndLastName()
    {
        // Return a value for testable output.
        return "Email: sample@example.com";
    }
}

class UserTest extends TestCase
{
    public function testValidUserName()
    {
        $user = new class('donald', 'Trump') extends User {
            public function getName() {
                return $this->name;  // Directly access the protected property via the subclass.
            }
        };
        $this->assertEquals('Donald', $user->getName());
    }

    public function testValidDataFormat()
    {
        $user = new User('donald', 'Trump');
        $mockedDb = new class extends Database {
            public function getEmailAndLastName() {
                return "Mocked DB used";  // Return mock response.
            }
        };

        $setUserClosure = function () use ($mockedDb) {
            $this->db = $mockedDb;
        };

        // Bind the closure to the $user object and execute.
        $setUserClosure = $setUserClosure->bindTo($user, get_class($user));
        $setUserClosure();

        $this->assertSame('Donald Trump', $user->getFullName());  // Ensure getFullName works as expected.
    }
}
