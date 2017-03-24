<?php

use Acme\Template\TurkeySub;
use Acme\Template\VeggieSub;

require 'vendor/autoload.php';

(new TurkeySub)->make();
echo '-------' . PHP_EOL;
(new VeggieSub())->make();