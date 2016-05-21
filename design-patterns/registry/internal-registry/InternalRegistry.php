<?php

include_once '../Registry.php';

/**
 * Class DBConnection.
 */
abstract class DBConnection extends PDO
{
    /**
     * @param null $objectName
     *
     * @return mixed
     */
    public static function getInstance($objectName = null)
    {
        $class = get_called_class(); //static::class

        $objectName = (!is_null($objectName)) ?: $class;

        if (!Registry::exists($objectName)) {
            $instance = new $class();
            Registry::set($instance, $objectName);
        }

        return Registry::get($objectName);
    }
}

/**
 * Class DBMainConnection.
 */
class DBMainConnection extends DBConnection
{
    public function __construct()
    {
        parent::__construct(MAIN_DB_DSN, MAIN_DB_USER, MAIN_DB_PASSWORD);
    }
}

/**
 * Class DBSecondConnection.
 */
class DBSecondConnection extends DBConnection
{
    public function __construct()
    {
        parent::__construct(SECOND_DB_DSN, SECOND_DB_USER, SECOND_DB_PASSWORD);
    }
}
