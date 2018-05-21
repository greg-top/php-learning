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

class Plane extends Car{

    //ovveride its parent value
    var $wheels = 30;

}

//if (class_exists('Plane')) {
//
//    echo "it does";
//}


$jet = new Plane();
$jet->SetDoors(20);
echo $jet->doors . "<br>";
echo $jet->wheels;