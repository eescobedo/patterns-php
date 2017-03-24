<?php

use Acme\Decorators\BasicInspection;
use Acme\Decorators\OilChange;
use Acme\Decorators\TireRotation;

require 'vendor/autoload.php';

echo (new TireRotation(new OilChange(new BasicInspection())))->getCost ();