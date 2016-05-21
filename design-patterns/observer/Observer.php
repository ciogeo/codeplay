<?php

/**
 * Interface Observer.
 */
interface Observer
{
    /**
     * @param PointOfInterest $pointOfInterest
     *
     * @return mixed
     */
    public function addPointOfInterest(PointOfInterest $pointOfInterest);

    /**
     * @return mixed
     */
    public function getObservers();
}
