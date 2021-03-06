<?php

namespace Acme\StrategyPattern;

/**
 * @property Quack quackBehavior
 * @property FlyWithWings flyBehavior
 */
class MallardDuck extends Duck
{

    /**
     * MallardDuck constructor.
     */
    public function __construct()
    {
        $this->quackBehavior = new Quack();
        $this->flyBehavior = new FlyWithWings();
    }

    public function display()
    {
        echo "I'm a real Mallard duck" . PHP_EOL;
    }
}