<?php

namespace Acme;

class TurkeySub
{
    public function make()
    {
        return $this
            ->layBread ()
            ->addLettuce ()
            ->addTurkey ()
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

    private function addTurkey()
    {
        var_dump ('add some turkey');
        return $this;
    }

    private function addSauces()
    {
        var_dump ('add oil and vinegar');
        return $this;
    }

}