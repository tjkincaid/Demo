<?php

if (isset($_POST['submit'])) {
	global $connection;
	$username = $_POST['username'];
	$password =  $_POST['password'];

	$connection = mysqli_connect('localhost', 'root', 'root', 'loginapp');
	if($connection) {
		echo "Connection Active";
	} else {
		die("Database connection failed");
	}
/*	if ($username && $password) {
		echo $username;
		echo $password;
	} else {
		echo "Username and Password cannot be blank";
	}*/


}


?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
		  integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
<div class="container">
	<div class="col-sm-6">
		<form action="login.php" method="post">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" class="form-control">
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" class="form-control">
			</div>
			<input class="btn btn-primary" type="submit" name="submit" value="Submit">
		</form>
	</div>


</div>


<?php

?>

</body>
</html>
