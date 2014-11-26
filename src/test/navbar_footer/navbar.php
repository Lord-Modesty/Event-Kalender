<div class="navbar navbar-inverse">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand">
            <?php echo $_SESSION[ 'CurrentSite'] ?>
        </a>
    </div>
    <div class="navbar-collapse collapse navbar-inverse-collapse">

        <ul class="nav navbar-nav">
            <li><a href="../index/index.php" data-toggle="tooltip" data-placement="bottom" title="Events">
                <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                </a>
            </li>

            <li>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="Archiv">
                    <span class="glyphicon glyphicon-folder-open" aria-hidden="true"></span>
                </a>
            </li>
        </ul>
        <?php if ($_SESSION[ 'CurrentSite']=="Login" ) { } else{ echo '<ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="glyphicon glyphicon-user" aria-hidden="true">  </span>
                    <b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="../login/login.php"><span class="glyphicon glyphicon-lock" aria-hidden="true"> Login</span>
                       </a>
                    </li>
                </ul>
            </li>
        </ul>'; } ?>
    </div>
</div>