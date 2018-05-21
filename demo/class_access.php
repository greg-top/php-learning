<?php

class Car {

    //create properties with keyword var
    public $wheels; //available on whole program
    protected $hood; //available in this class and classes which are extending
    private $engine; //available only in this class
    var $doors;

    function __construct()
    {
        $this->wheels = 4;
        $this->hood = 1;
        $this->engine = 1;
        $this->doors = 5;
    }

    function MoveWheels() {
        echo "Wheels move";
    }

    function SetDoors($doors) {
        //$this will refer to a class
        $this->doors = $doors;
    }

    public function showProperty($property) {
        echo $this->$property . "<br>";
    }

}

class Plane extends Car{
    function getEngine () {
        echo $this->$engine;
    }
}




$bmw = new Car();
echo $bmw->wheels . "<br>";

//cannot use protected nad private properties out of class
#echo $bmw->hood;

$bmw->showProperty('doors');

$jet = new Plane();
$jet->showProperty('engine');
$jet->getEngine();