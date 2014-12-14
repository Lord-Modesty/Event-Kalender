<?php session_start(); 
$_SESSION[ 'CurrentSite']="Events";
$_SESSION[ 'loggedIn']="Events" ;?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Event Kalender | Index</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="shortcut icon" href="../img/calendar.png" type="image/x-icon" />

</head>

<body>

    <?php include( "../navbar_footer/navbar.php")?>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>