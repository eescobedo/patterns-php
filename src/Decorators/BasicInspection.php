<?php

namespace Acme\Decorators;

class BasicInspection implements CarService
{
    public function getCost()
    {
        return 25;
    }
}