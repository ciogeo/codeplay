<?php

include_once '../Registry.php';

/**
 * Class DBConnection
 */
class DBConnection extends PDO {

    /**
     * @param null $objectName
     * @return mixed
     */
    public static function getInstance($objectName = null)
    {
        $class = get_called_class(); //static::class

        $objectName = (!is_null($objectName)) ?: $class;

        if (!Registry::contains($objectName)) {
            $instance = new $class();
            Registry::set($instance, $objectName);
        }

        return Registry::get($objectName);
    }
}