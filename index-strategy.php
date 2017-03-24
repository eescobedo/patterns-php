<?php

use Acme\Strategy\App;
use Acme\Strategy\LogToDatabase;

require 'vendor/autoload.php';

$app = new App;

$app->log ('some information here', new LogToDatabase());