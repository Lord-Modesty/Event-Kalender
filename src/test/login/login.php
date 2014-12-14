<?php session_start(); $_SESSION[ 'CurrentSite']="Login" ;
if (isset($_SESSION[ 'loggedIn'])) {if($_SESSION[ 'loggedIn']==TRUE){  header( 'location: ../admin/admin.php');} } else { }?>
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

    <form action="login_script.php" method="post">
        <div class="container">
            <div class="row text-center">
                <div class="formular_padding">
                    <img class="img_login formular" src="../img/lock.png">
                </div>
            </div>
              <?php if(isset($_GET[ 'Error'])){ if($_GET[ 'Error']=='true' ){ echo( '<div class="row"><div class="alert alert-dismissable alert-danger col-sm-4 col-sm-offset-4 formular">
  <button type="button" class="close" data-dismiss="alert">×</button>
  <strong>Fehler</strong> Benutzername oder Passwort falsch!
</div></div>'); }} ?>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4 formular">
                    <input required name="benutzername" type="text" class="form-control" placeholder="Benutzername">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4 formular">
                    <input required name="passwort" type="password" class="form-control" placeholder="Passwort">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4 formular">
                    <button type="submit" class="btn btn-primary  pull-right">Login</button>
                </div>
            </div>
        </div>
    </form>
    


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>