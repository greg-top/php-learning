<?php

class Car {

    function MoveWheels() {
        echo "Wheels move";
    }



}

if (method_exists("Car","MoveWheels")) {
    echo "This method exists";
} else {
    echo "no";
}