<?php

class Car {

    //create properties with keyword var
    var $wheels;
    var $hood;
    var $engine;
    var $doors;

    function __construct()
    {
        $this->wheels = 4;
        $this->hood = 1;
        $this->engine = 1;
        $this->doors = 5;
        echo "constructor";
    }

    function MoveWheels() {
        echo "Wheels move";
    }

    function SetDoors($doors) {
        //$this will refer to a class
        $this->doors = $doors;
    }


}



$bmw = new Car();
echo $bmw->wheels;