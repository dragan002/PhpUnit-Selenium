<?php

namespace App;

use Database;

class User {

    protected $name;

    protected $db;

    private $lastName;

    public function __construct($name, $lastName)
    {
        $this->name = ucfirst($name);
        $this->lastName = ucfirst($lastName);
        $this->db = new Database;
    }

    public function getFullName()
    {
        $this->db->getEmailAndLastName();
        return $this->name . ' ' . $this->lastName;
    }

    private function hashedPassword()
    {
        return "hashed password";
    }

}
