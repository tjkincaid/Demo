
<?php
class Car2 {

	function moveWheels(){
		echo "wheels move";

	}





}

if (class_exists("Car2", "moveWheels")){
	echo "VROOM VROOM method exists";
} else {
	echo "you fucked";
}






