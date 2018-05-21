<?php

class Car {

    //create properties with keyword var
    public $wheels; //available on whole program
    protected $hood; //available in this class and classes which are extending
    private $engine; //available only in this class

    //create static property - attach only to class (not constant!!)
    static $doors = 10;

    function __construct()
    {
        $this->wheels = 4;
        $this->hood = 1;
        $this->engine = 1;
        //call a static property in a method
        Car::$doors = 40;
    }

    function MoveWheels() {
        echo "Wheels move";
    }

    public function showProperty($property) {
        echo $this->$property . "<br>";
    }

    //create static method

}



$bmw = new Car();

//output static property from class
echo Car::$doors;

