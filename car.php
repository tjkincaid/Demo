
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
$bmw->color="Silver";
echo $bmw->wheels;
echo "";
echo $bmw->color;
echo "";

$bmw->moveWheels();
echo $bmw->wheels;

if (class_exists("Car", "moveWheels")){
	echo "The wheels are moving";
}



