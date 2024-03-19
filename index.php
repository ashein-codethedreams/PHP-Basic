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
        echo $this->name . " is driving...";
    }
}

//object
$carObj = new Car("Lamborghini");
$carObj->drive();
