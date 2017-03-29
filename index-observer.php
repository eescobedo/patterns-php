<?php

use Acme\Observer\EmailNotifier;
use Acme\Observer\LogHandler;
use Acme\Observer\Login;
use Acme\Observer\LoginReporter;

require('vendor/autoload.php');

$login = new Login;

//$login->attach(new LogHandler);
//$login->attach(new EmailNotifier);

$login->attach([
    new LogHandler,
    new EmailNotifier,
    new LoginReporter
]);

$login->fire();