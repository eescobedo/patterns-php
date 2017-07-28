<?php

namespace Acme\StrategyPattern;

abstract class Duck
{
    protected $flyBehavior;
    protected $quackBehavior;

    public abstract function display();

    public function performFly()
    {
        $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

    public function swim()
    {
        echo "All ducks float, even decoys!";
    }

}