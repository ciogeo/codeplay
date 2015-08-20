<?php

spl_autoload_register(function ($class) {
    include_once $class . '.php';
});

$twitter = new TwitterAdapter(new Twitter());
$twitter->send('New Twitter status');

$facebook = new FacebookAdapter(new Facebook());
$facebook->send('New Facebook status');
