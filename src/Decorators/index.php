<?php

/*
class BasicInspectionAndOilChange {
	public function getCost()
	{
		return 25 + 19;
	}
}

class BasicInspectionAndOilChangeAndTireRotation {
	public function getCost()
	{
		return 25 + 19 + 10;
	}
}
*/

//echo (new BasicInspectionAndOilChangeAndTireRotation())->getCost();
use Acme\Decorator\BasicInspection;
use Acme\Decorator\OilChange;
use Acme\Decorator\TireRotation;

echo (new TireRotation(new OilChange(new BasicInspection())))->getCost ();