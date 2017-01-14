<?php

/**
 * Class HotelObserver.
 */
class HotelObserver implements PointOfInterest
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
        return 'Hotel '.$this->name.' added.';
    }
}
