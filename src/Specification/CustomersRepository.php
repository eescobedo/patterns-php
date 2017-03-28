<?php namespace Acme\Specification;

class CustomersRepository
{

    public function whoMatch($specification)
    {
//        $matches = [];
//        foreach ($this->all() as $customer) {
//            if ($specification->isSatisfiedBy($customer)) {
//                $matches[] = $customer;
//            }
//        }
//        return $matches;

        $customers = Customer::query();

        $customers = $specification->asScope($customers);

        return $customers->get();
    }

    public function all()
    {
        return Customer::all();
    }
}