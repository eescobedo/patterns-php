<?php

use Acme\Strategy\App;
use Acme\Strategy\LogToDatabase;
use Acme\Strategy\LogToXWebService;
use Acme\StrategyPattern\MallardDuck;

require 'vendor/autoload.php';

$app = new App;

$app->log ('some information here', new LogToXWebService());
echo PHP_EOL;
$mallardDuck = new MallardDuck();
$mallardDuck->performFly();
$mallardDuck->performQuack();