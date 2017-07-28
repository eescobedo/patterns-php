<?php

namespace Acme\StrategyPattern;

abstract class Yego
{
    protected $chargeBehavior;

    public function performCharge()
    {
        $this->chargeBehavior->charge();
    }

    public function setChargeBehavior(ChargeBehavior $chargeBehavior)
    {
        $this->chargeBehavior =  $chargeBehavior;
    }
}