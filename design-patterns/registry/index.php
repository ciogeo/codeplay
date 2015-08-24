<?php

spl_autoload_register(function ($class) {
    include_once $class . '.php';
});

$DBMainConnection = new DBMainConnection;
Registry::set($DBMainConnection);

$DBSecondConnection = new DBSecondConnection;
Registry::set($DBSecondConnection);

// get the instances
$mainConnection = Registry::get('DBMainConnection');

$secondConnection = Registry::get('DBSecondConnection');

