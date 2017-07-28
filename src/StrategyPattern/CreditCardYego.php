<?php

namespace Acme\StrategyPattern;

/**
 * @property CreditCardCharge chargeBehavior
 */
class CreditCardYego extends Yego
{

    /**
     * CreditCardYego constructor.
     */
    public function __construct()
    {
        $this->chargeBehavior = new CreditCardCharge();
    }
}