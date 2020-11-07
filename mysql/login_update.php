<?php include "db.php";?>
<?php include "functions.php";?>
<?php
if(isset($_POST['submit'])) {
	updateTable();
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
		<h1 class="text-center">Update</h1>
		<form action="login_update.php" method="post">
			<div class="form-group">
				<label for="username">Username</label>
				<input type="text" name="username" class="form-control">
			</div>

			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" name="password" class="form-control">
			</div>

			<div class="form-group">

				<select name="id" id="">
					<?php
					showAllData();
					?>
				</select>

			</div>

			<input class="btn btn-primary" type="submit" name="submit" value="UPDATE">

		</form>


	</div>



</div>


<?php

?>

</body>
</html>
