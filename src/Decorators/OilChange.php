<?php

namespace Acme\Decorators;

class OilChange implements CarService
{
    protected $carService;

    function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 29 + $this->carService->getCost ();
    }

}