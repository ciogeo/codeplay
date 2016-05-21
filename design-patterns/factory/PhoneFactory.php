<?php

/**
 * Class PhoneFactory.
 */
class PhoneFactory
{
    /**
     * @param $maker
     * @param $model
     *
     * @return Phone
     */
    public static function create($maker, $model)
    {
        return new Phone($maker, $model);
    }
}
