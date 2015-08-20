<?php

/**
 * Class Simulator
 */
class Simulator implements Observer {

    private $observers;

    public function __construct() {
        $this->observers = array();
    }

    /**
     * @param PointOfInterest $pointOfInterest
     */
    public function addPointOfInterest(PointOfInterest $pointOfInterest)
    {
        array_push($this->observers, $pointOfInterest);
    }

    /**
     * Echo Points Of Interest
     */
    public function getObservers()
    {
        foreach ($this->observers as $observer)
        {
            echo $observer->get() . '<br />';
        }
    }
}