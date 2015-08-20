<?php

/**
 * Class HotelObserver
 */
class HotelObserver implements PointOfInterest {

    private $name;

    /**
     * @param $name
     */
    function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function get()
    {
        return 'Hotel ' . $this->name . ' added.';
    }
}
