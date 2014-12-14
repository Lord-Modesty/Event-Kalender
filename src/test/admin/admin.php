<?php session_start(); if (isset($_SESSION[ 'loggedIn'])) { $_SESSION[ 'CurrentSite']="Admin" ; } else { header( 'location: index.php'); }?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Event Kalender | Admin</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="shortcut icon" href="../img/calendar.png" type="image/x-icon" />

</head>

<body>
    <?php include( "../navbar_footer/navbar.php")?>


    <div class="container">
        <div class="row">
            <!-- Veranstaltung +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
            <div class="col-sm-6">
                <form action="insert_event.php" method="post">
                    <div class="page-header">
                        <h1 id="navbar">Neue Veranstaltung</h1>
                    </div>

                    <div class="form-group">
                        <input class="form-control input-lg" type="text" id="inputLarge" placeholder="Name">
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" rows="3" id="textArea" placeholder="Beschreibung"></textarea>
                    </div>
            
                    <button type="submit" class="btn btn-primary  pull-right">Speichern</button>
                </form>
            </div>
            <!-- GENRE +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
            <div class="col-sm-3">
                <form action="insert_genre.php" method="post">
                    <div class="page-header">
                        <h1 id="navbar">Neues Genre</h1>
                    </div>

                    <div class="form-group">
                        <input class="form-control input-lg" type="text" id="inputLarge" placeholder="Name">
                    </div>
                    
                    <button type="submit" class="btn btn-primary  pull-right">Speichern</button>
                
                </form>
            </div>
            <!-- Preisgruppe +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
            <div class="col-sm-3">
                <form action="insert_pricegroup.php" method="post">
                    <div class="page-header">
                        <h1 id="navbar">Neue Preisgruppe</h1>
                    </div>

                    <div class="form-group">
                        <input class="form-control input-lg" type="text" id="inputLarge" placeholder="Name">
                    </div>

                    <div class="form-group">
                        <div class="input-group">
                            <input type="number" class="form-control" placeholder="Preis" step="any" min="0">
                            <span class="input-group-addon">CHF</span>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary  pull-right">Speichern</button>
                </form>
            </div>
        </div>
    </div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
</body>

</html>