<?php

//class
class Car
{
    protected $name; //property
    function __construct($carName)
    {
        $this->name = $carName;
    }
    function drive()
    {           //method
        echo $this->name . " is driving... ";
    }
    function stop()
    {           //method
        echo $this->name . " stopped.";
    }
}

//inheritance
class Truck extends Car
{
    private $wheels;
    function __construct($carName, $carWheels)
    {
        $this->name = $carName;
        $this->wheels = $carWheels;
    }
    function wheels()
    {
        echo $this->name . " has " . $this->wheels . " wheels.";
    }
}

$truckObj = new Truck("Toyata", 4);
$truckObj->wheels();
