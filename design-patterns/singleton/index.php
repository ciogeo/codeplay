<?php

/**
 * Class Database
 */
class Database extends PDO {

    // A static variable to hold our single instance
    private static $_instance = null;

    /**
     * Make the constructor private to ensure singleton
     */
    private function __construct()
    {
        // Call the PDO constructor
        parent::__construct(DB_DSN, DB_USER, DB_PASSWORD);
    }

    /**
     * A method to get our singleton instance
     *
     * @return Database|null
     */
    public static function getInstance()
    {
        if (!(self::$_instance instanceof Database)) {
            self::$_instance = new Database();
        }

        return self::$_instance;
    }
}

$db = Database::getInstance();