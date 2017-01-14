<?php

/**
 * Class RestaurantObserver.
 */
class RestaurantObserver implements PointOfInterest
{
    private $name;

    /**
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function get()
    {
        return 'Restaurant '.$this->name.' added.';
    }
}
