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
$bmw->moveWheels();
///$bmw->wheels = 8;

//$bmw ->moveWheels ();
echo $bmw->wheels;

?>