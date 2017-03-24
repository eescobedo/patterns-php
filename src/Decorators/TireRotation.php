<?php namespace Acme\Decorators;

class TireRotation implements CarService
{
    protected $carService;

    function __construct(CarService $carService)
    {
        $this->carService = $carService;
    }

    public function getCost()
    {
        return 15 + $this->carService->getCost ();
    }
}