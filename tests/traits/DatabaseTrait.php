<?php

namespace App\Tests\Traits;

trait DatabaseTrait
{
    protected $cart;
    protected static $db_connection = false;

    /**
     * @beforeClass
     */
    public static function createDatabase()
    {
        if (self::$db_connection) {
            return;
        }
        self::$db_connection = new \PDO('sqlite::database.db');
    }

    /**
     * @afterClass
     */
    public static function deleteDatabase()
    {
        self::$db_connection = null;
        unlink(':database.db');
    }
}