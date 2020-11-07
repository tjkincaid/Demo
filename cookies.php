<?php


$name = "tjcookie";
$value = 100;
$expiration = time() + (60 * 60 * 24 * 7);
setcookie($name, $value, $expiration);




?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


<?php
if (isset($_COOKIE["tjcookie"])){
	$someOne = $_COOKIE["tjcookie"];
	echo $someOne;

} else {
	$someOne = "";
	echo "sorry no cookie for you";
}




?>
</body>
</html>
