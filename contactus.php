<?php
require_once("./classes/autoload.php");
$main = new Main_class();
$template = new Template_class();
$db = new DB_class();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Saziņa</title>
    <?php Template_class::getLibs(); ?>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="./images/logo.png" class="logo" alt=""></a>
        </div>
        <ul class="nav navbar-nav navbar-right collapse navbar-collapse" id="myNavbar">
            <li><a href="index.php">Galvenā</a></li>
            <li><a href="games.php">Spēles</a></li>
            <li><a href="gallery.php">Galerija</a></li>
            <li><a href="prices.php">Cenas</a></li>
            <li class="dropdown active">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Kontakti<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="contacts.php">Kontakti</a></li>
                    <li><a href="contactus.php">Saziņa</a></li>
                </ul>
            <li><a href="registration.php">Reģistrācija</a></li>
            </li>
            <li><a href="aboutus.php">Par Mums</a></li>
        </ul>
        <form class="navbar-form navbar-right" action="#">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Meklēt">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit">
                        <i class="glyphicon glyphicon-search"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</nav>
<div class="container-fluid text-center main">
    <div class="row content">
        <div class="col-sm-2">
            <p><a href="#">Navi</a></p>
            <p><a href="#">Gācija</a></p>
            <p><a href="contacts.php">Kontakti</a></p>
            <p><a href="contactus.php">Saziņa</a></p>
        </div>
        <div class="col-sm-8 text-left">
            <form action="contactus.php" method="post">
                <div class="form-group">
                    <label for="usr">Vārds:</label>
                    <input type="text" class="form-control" id="usr" placeholder="Ievadi vārdu" name="name">
                </div>
                <div class="form-group">
                    <label for="email">E-pasts:</label>
                    <input type="email" class="form-control" id="email" placeholder="Ievadi e-pastu" name="email">
                </div>
                <div class="form-group">
                    <label for="comment">Ziņojums:</label>
                    <textarea class="form-control" rows="5" id="comment" placeholder="Man garšo banāni" name="messege"></textarea>
                </div>
                <button type="submit" class="btn btn-default" name="send">Sūtīt</button>
            </form>
            <?php
            if(isset($_POST['send'])){
                    $db->saveMess($_POST['name'],$_POST['email'],$_POST['messege']);
                    echo "Dati  saglabāti";
                }
            ?>
        </div>
        <div class="col-sm-2">
            <div class="well">
                <p>Reklāma</p>
            </div>
            <div class="well">
                <p>Reklāma</p>
            </div>
        </div>
    </div>
</div>

<footer class="container-fluid">
    Artūrs Kirņickis EDP1 Inc. 2017-2018.gads
</footer>
</body>
</html>