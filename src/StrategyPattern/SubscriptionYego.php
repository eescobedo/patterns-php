<?php

namespace Acme\StrategyPattern;

/**
 * @property SubscriptionCharge chargeBehavior
 */
class SubscriptionYego extends Yego
{

    /**
     * SubscriptionYego constructor.
     */
    public function __construct()
    {
        $this->chargeBehavior = new SubscriptionCharge();
    }
}