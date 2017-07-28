<?php

use Acme\Strategy\App;
use Acme\Strategy\LogToDatabase;
use Acme\Strategy\LogToXWebService;
use Acme\StrategyPattern\CreditCardCharge;
use Acme\StrategyPattern\FlyRocketPowered;
use Acme\StrategyPattern\MallardDuck;
use Acme\StrategyPattern\ModelDuck;
use Acme\StrategyPattern\SubscriptionCharge;
use Acme\StrategyPattern\SubscriptionYego;

require 'vendor/autoload.php';

$app = new App;

$app->log ('some information here', new LogToXWebService());
echo PHP_EOL;
$mallardDuck = new MallardDuck();
$mallardDuck->performFly();
$mallardDuck->performQuack();
echo PHP_EOL;
echo PHP_EOL;
$modelDuck = new ModelDuck();
$modelDuck->performQuack();
$modelDuck->performFly();
$modelDuck->setFlyBehavior(new FlyRocketPowered);
$modelDuck->performFly();

$creditCardYego = new SubscriptionYego();
$creditCardYego->performCharge();
$creditCardYego->setChargeBehavior(new CreditCardCharge());
$creditCardYego->performCharge();
