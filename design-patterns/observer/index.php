<?php

spl_autoload_register(function ($class) {
    include_once $class.'.php';
});

$simulator = new Simulator();

$poi1 = new HotelObserver('Rex Mamaia');
$poi2 = new RestaurantObserver('Reyna');
$poi3 = new RestaurantObserver('Marco Polo');

$simulator->addPointOfInterest($poi1);
$simulator->addPointOfInterest($poi2);

$simulator->getObservers();

$simulator->addPointOfInterest($poi3);

$simulator->getObservers();
