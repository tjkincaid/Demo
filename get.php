<?php
print_r($_GET);




?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>


<?php
$id = 200;
$button = "CLICK HERE";



?>

<a href="get.php?id=<?php	echo $id;?>"><?php	echo $button;?></a>

</body>
</html>
