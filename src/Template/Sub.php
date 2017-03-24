<?php namespace Acme\Template;

abstract class Sub
{
    public function make()
    {
        return $this
            ->layBread ()
            ->addLettuce ()
            ->addPrimaryTopping ()
            ->addSauces ();
    }

    protected abstract function addPrimaryTopping();

    protected function addSauces()
    {
        var_dump ('add oil and vinegar');
        return $this;
    }

    protected function layBread()
    {
        var_dump ('laying down the bread');
        return $this;
    }

    protected function addLettuce()
    {
        var_dump ('add some lettuce');
        return $this;
    }
}