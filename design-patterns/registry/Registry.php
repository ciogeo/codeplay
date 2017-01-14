<?php

/**
 * Class Registry.
 */
class Registry
{
    private static $_objectsStore = [];

    /**
     * Add an object to the registry
     * If overwriting an object, the previous object will be returned.
     *
     * @param $object
     * @param $objectName
     *
     * @return mixed
     */
    public static function add($object, $objectName = null)
    {
        $objectName = (!is_null($objectName)) ?: get_class($object);

        $return = null;
        if (isset(self::$_objectsStore[$objectName])) {
            $return = self::$_objectsStore[$objectName];
        }

        self::$_objectsStore[$objectName] = $object;

        return $return;
    }

    /**
     * Get an object from the registry.
     *
     * @param $objectName
     *
     * @throws Exception
     *
     * @return mixed
     */
    public static function get($objectName)
    {
        if (self::exists($objectName)) {
            throw new Exception('Object does not exist in the registry.');
        }

        return self::$_objectsStore[$objectName];
    }

    /**
     * Check if an object exists in the registry.
     *
     * @param $objectName
     *
     * @return bool
     */
    public static function exists($objectName)
    {
        if (!isset(self::$_objectsStore[$objectName])) {
            return false;
        }

        return true;
    }

    /**
     * Remove an object from the registry.
     *
     * @param $objectName
     */
    public static function remove($objectName)
    {
        if (self::exists($objectName)) {
            unset(self::$_objectsStore[$objectName]);
        }
    }
}
