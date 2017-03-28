<?php namespace Acme\Specification;

class Customer
{
    protected $type;

    /**
     * Customer constructor.
     * @param $type
     */
    public function __construct($type)
    {
        $this->type = $type;
    }

    public function type()
    {
        return $this->type;
    }
}