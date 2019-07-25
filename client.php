<?php

require_once "vendor/autoload.php";

use Hprose\Client;
$client = new Client('http://hprose.com/example/', false);
