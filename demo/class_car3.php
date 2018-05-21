<?php

class Car {

    //create properties with keyword var
    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 5;


    function MoveWheels() {
        echo "Wheels move";
    }

    function SetDoors($doors) {
        //$this will refer to a class
        $this->doors = $doors;
    }



}

//create instance of Car class called object
$bmw = new Car();

$mercedes = new Car();

//use object method
$bmw->MoveWheels();

echo "<br>";

//use object properties (don't put $ sign)
echo $bmw->wheels . "<br>";

//change a value of the class property
$bmw->wheels = 3;

//use object properties (don't put $ sign)
echo $bmw->wheels . "<br>";

//use object method to set new value of doors
$bmw->SetDoors(11);
echo $bmw->doors . "<br>";
