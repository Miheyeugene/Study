<?php


class Car {

    var $wheels = 4;
    var $hood = 1;
    var $engine = 1;
    var $doors = 4;

    function moveWheels (){

    $this->wheels = 10;

}

}    
$bmw = new Car();

class Plane extends Car{

}
$jet = new Plane;
$jet ->moveWheels();

echo $jet->wheels;

/* if(class_exists('Plane')){
echo "it does!";
} */

?>