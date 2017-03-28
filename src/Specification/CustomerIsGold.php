<?php namespace Acme\Specification;

class CustomerIsGold
{
    public function isSatisfiedBy(Customer $customer)
    {
        $customer->type == 'gold';
    }
}