<?php

namespace Acme;

class VeggieSub
{
    public function make()
    {
        return $this
            ->layBread ()
            ->addLettuce ()
            ->addVeggies ()
            ->addSauces ();
    }

    private function layBread()
    {
        var_dump ('laying down the bread');
        return $this;
    }

    private function addLettuce()
    {
        var_dump ('add some lettuce');
        return $this;
    }

    private function addVeggies()
    {
        var_dump ('add some veggies');
        return $this;
    }

    private function addSauces()
    {
        var_dump ('add oil and vinegar');
        return $this;
    }

}