<?php

namespace App;

class User {

    protected $name;

    private $lastName;

    public function __construct($name, $lastName)
    {
        $this->name = ucfirst($name);
        $this->lastName = ucfirst($lastName);
    }

    public function getFullName()
    {
        return $this->name . ' ' . $this->lastName;
    }
}