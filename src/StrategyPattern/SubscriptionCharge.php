<?php

namespace Acme\StrategyPattern;

class SubscriptionCharge implements ChargeBehavior
{

    public function charge()
    {
        echo 'Charge by subscription method' . PHP_EOL;
    }
}