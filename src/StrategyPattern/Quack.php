<?php

namespace Acme\StrategyPattern;

class Quack implements QuackBehavior
{
    public function quack()
    {
        echo "Quack" . PHP_EOL;
    }
}