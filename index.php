<?php

use App\Application;

$loader = require( __DIR__ . '/vendor/autoload.php' );


$appication = new Application();
$appication->setWord('завод');
$appication->run();
$appication->show();

