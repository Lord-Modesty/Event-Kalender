<?php
session_start();
require_once ('../constants.php');

$username = $_POST["benutzername"];
$passwort = md5($_POST["passwort"]);

$db_connection = new mysqli(MYSQL_HOST, MYSQL_USER, MYSQL_PASS, MYSQL_DBNAME) or die("Verbindung zur Datenbank konnte nicht hergestellt werden");

if (mysqli_connect_errno()) {
	echo "Fehler aufgetreten: " . mysqli_connect_error();
	exit();
} else {
	$query = "SELECT user_id,username, password FROM tbl_user WHERE username LIKE ? AND password = ? LIMIT 1";
	$result = $db_connection -> prepare($query);
	$result -> bind_param('ss', $username, $passwort);
	$result -> execute();
	$result -> bind_result($user_id, $username, $password);
	$result -> store_result();
	$result -> fetch();

	if ($result -> num_rows > 0) {

		$result -> close();
		mysqli_close($db_connection);
		$_SESSION['loggedIn'] = TRUE;
		$_SESSION['user_id'] = $user_id;
		$_SESSION['username'] = $username;
		header('location: home.php');

	} else {

		$result -> close();
		mysqli_close($db_connection);

		$_SESSION = array();
		session_destroy();
		header('location: index.html');
	}

}
?>