<?php include "db.php";
include "functions.php";


global $connection;


if (isset($_POST['submit'])) {

	createUser($connection);

}


?>

<?php include "includes/header.php" ?>


<body>
<div class="container">
	<div class="col-sm-6">
		<form action="login_create.php" method="post">
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
