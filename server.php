<?php

require_once "vendor/autoload.php";

use Hprose\Http\Server;

function hello($name)
{
    return "Hello $name!";
}

echo 'hprose service is starting...' . PHP_EOL;
echo 'listening port 8000...' . PHP_EOL;
$server = new Server();
$server->add("hello");
$server->debug = true;
$server->crossDomain = true;
$server->start();
echo PHP_EOL;
echo 'start...' . PHP_EOL;