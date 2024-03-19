<?php

//class
class Car
{
    private $name;
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

//object
$carObj = new Car("Lamborghini");
$carObj->drive();

$carObj2 = new Car("MarkII");
$carObj2->stop();
