<?php

namespace Acme\StrategyPattern;

/**
 * @property Quack quackBehavior
 * @property FlyNoWay flyBehavior
 */
class ModelDuck extends Duck
{
    /**
     * ModelDuck constructor.
     */
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new Quack();
    }

    public function display()
    {
        echo "I'm model duck" . PHP_EOL;
    }
}