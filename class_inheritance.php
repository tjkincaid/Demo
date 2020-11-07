
<?php

class Car {
	var $wheels = 4;
	var $doors = 4;
	var $hood = 1;
	var $color;



	function moveWheels() {
		echo "Wheels are Moving";
		$this->wheels = 10;
	}
}

$bmw = new Car();

class Plane extends Car {
	var $wings = 2;

}

if (class_exists("Plane")){echo "Plane exists" . "<br>";}

$jet = new Plane();
echo $jet->wheels . "<br>";
echo $jet->wings;




