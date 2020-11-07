<?php include "db.php";

function showAllData()
{
	global $connection;
	$query = "SELECT * FROM users";
	$result = mysqli_query($connection, $query);
	if (!$result) {
		die("Query failed" . mysqli_error());
	}

	while ($row = mysqli_fetch_assoc($result)) {
		$id = $row['id'];
		echo "<option value='$id'>$id</option>";
	}
}

function updateTable(){

	print_r($_POST);
	global $connection;
	$hashFormat = "$2y$10$";
	$salt = "iusesomecrazystrings22";
	$hashAndSalt = $hashFormat . $salt;

	$username = mysqli_real_escape_string($connection, $_POST['username']);
	$password = crypt(mysqli_real_escape_string($connection, $_POST['password']), $hashAndSalt);
	$id = $_POST['id'];

	$query = "UPDATE users SET ";
	$query .= "username = '$username', ";
	$query .= "password = '$password' ";
	$query .= "WHERE id = $id ";

	$result = mysqli_query($connection, $query);
	if(!$result) {

		die("QUERY FAILED" . mysqli_error($connection));
	}else {

		echo "Record Updated";

	}


}

function deleteRows(){

	print_r($_POST);
	global $connection;
	$id = $_POST['id'];

	$query = "DELETE FROM users ";
	$query .= "WHERE id = $id ";

	$result = mysqli_query($connection, $query);
	if(!$result) {

		die("QUERY FAILED" . mysqli_error($connection));
	}else {

		echo "Record deleted";

	}


}

function createUser(mysqli $connection)
{
	$hashFormat = "$2y$10$";
	$salt = "iusesomecrazystrings22";
	$hashAndSalt = $hashFormat . $salt;

	$username = mysqli_real_escape_string($connection, $_POST['username']);
	$password = crypt(mysqli_real_escape_string($connection, $_POST['password']), $hashAndSalt);


	$query = "INSERT INTO users(username, password) ";
	$query .= "VALUES ('$username', '$password')";

	$result = mysqli_query($connection, $query);
	if (!$result) {
		die("Query failed" . mysqli_error());
	}
}
