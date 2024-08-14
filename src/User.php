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

    public function someOperation($array)
    {
        $count = count($array);

        if($count == 0 ) return "Error";

        elseif($count == 1) {
            if($array[0] == 0) return "Error";
            else return "ok";
        } else {
            return "ok";
        }
    }

}
