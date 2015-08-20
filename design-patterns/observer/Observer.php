<?php

/**
 * Interface Observer
 */
interface Observer {

    /**
     * @param PointOfInterest $pointOfInterest
     * @return mixed
     */
    function addPointOfInterest(PointOfInterest $pointOfInterest);

    /**
     * @return mixed
     */
    function getObservers();
}