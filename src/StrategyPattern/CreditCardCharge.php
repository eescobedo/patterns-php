<?php

namespace Acme\StrategyPattern;

class CreditCardCharge implements ChargeBehavior
{
    public function charge()
    {
        echo 'Charge using credit card of user' . PHP_EOL;
    }
}