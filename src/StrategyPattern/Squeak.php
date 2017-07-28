<?php

namespace Acme\StrategyPattern;

class Squeak implements QuackBehavior
{
    public function quack()
    {
        echo 'Squeak' . PHP_EOL;
    }
}