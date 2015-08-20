<?php

spl_autoload_register(function ($class) {
    include_once $class . '.php';
});

$sort = new Sort(array(5,2,6,9));

print_r($sort->sort());

