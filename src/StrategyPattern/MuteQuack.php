<?php

namespace Acme\StrategyPattern;

class MuteQuack implements QuackBehavior
{
    public function quack()
    {
        echo '<< Silence >>' .PHP_EOL;
    }
}