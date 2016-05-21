<?php

spl_autoload_register(function ($class) {
    include_once $class.'.php';
});

$phone = PhoneFactory::create('iPhone', '6');

echo $phone->getPhone();
