<?php

use App\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testValidUserName()
    {
        $user = new class('donald', 'Trump') extends User
        {
            public function getName() {
                return $this->name;
            }
        };
        $this->assertEquals('Donald', $user->getName());
    }
}