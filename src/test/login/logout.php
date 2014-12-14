<?php 
session_start();
session_start();
$_SESSION['loggedIn'] = FALSE;
header('location: ../login/login.php');

?>