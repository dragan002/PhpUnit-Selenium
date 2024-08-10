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
                return "Mocked DB used";
            }
        };
        $setUserClosure = function () use ($mockedDb) {
            $this->db = $mockedDb;
        };
        $setUserClosure = $setUserClosure->bindTo($user, get_class($user));
        $setUserClosure();

        $this->assertSame('Donald Trump', $user->getFullName());
    }

    public function testHashedPassword()
    {
        $user = new User('donald', 'trump');

        $expected = "hashed password";

        $phpunit = $this;

        $assertClosure = function() use ($phpunit, $expected)
        {
            $phpunit->assertSame($expected, $this->hashedPassword());
        };
        $executeaAssertClosure = $assertClosure->bindTo($user, get_class($user));
        $executeaAssertClosure();   
    }

    public function testHashedPassword2()
    {
        $user = new User('donald', 'trump');
        $expected = "hashed password";

        $reflection = new ReflectionClass($user);
        $method = $reflection->getMethod('hashedPassword');
        $method->setAccessible(true);

        $actual = $method->invoke($user);  // Call the private/protected method
        $this->assertSame($expected, $actual);
    }

}
