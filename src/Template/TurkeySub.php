<?php namespace Acme\Template;

class TurkeySub extends Sub
{
    public function addPrimaryTopping()
    {
        var_dump ('add some turkey');
        return $this;
    }
}