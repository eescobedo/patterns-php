<?php

use Acme\Specification\Customer;
use Acme\Specification\CustomerIsGold;

class CustomerIsGoldTest extends PHPUnit_Framework_TestCase
{
    /** @test */
    public function a_customer_is_gold_if_they_have_the_respective_type()
    {
        $specification = new CustomerIsGold();

        $goldCustomer = new Customer('gold');
        $silverCustomer = new Customer('silver');

        $this->assertTrue($specification->isSatisfiedBy ($goldCustomer));
        $this->assertFalse($specification->isSatisfiedBy ($silverCustomer));
    }
}