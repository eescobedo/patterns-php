<?php

use Acme\TurkeySub;
use Acme\VeggieSub;

require 'vendor/autoload.php';

(new TurkeySub)->make();
(new VeggieSub())->make();