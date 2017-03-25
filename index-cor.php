<?php

use Acme\ChainOfResponsability\Alarm;
use Acme\ChainOfResponsability\HomeStatus;
use Acme\ChainOfResponsability\Lights;
use Acme\ChainOfResponsability\Locks;

require 'vendor/autoload.php';


$locks = new Locks;
$lights = new Lights();
$alarm = new Alarm();

$locks->succeedWith($lights);
$lights->succeedWith($alarm);

$locks->check(new HomeStatus);