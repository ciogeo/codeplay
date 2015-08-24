<?php

include_once 'InternalRegistry.php';

// get the instances
$mainConnection = DBMainConnection::getInstance();

$secondConnection = DBSecondConnection::getInstance();

$thirdConnection = DBMainConnection::getInstance('database');