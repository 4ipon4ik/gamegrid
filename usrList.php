<?php
    require_once("./classes/autoload.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>List</title>
    <?php Template_class::getLibs(); ?>
    <?php if(isset($_SESSION['nick'])){
        
    } ?>
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
            <li><a href="gamesList.php">Spēles</a></li>
            <li><a href="gallery.php">Galerija</a></li>
            <li><a href="prices.php">Cenas</a></li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">Kontakti<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="contacts.php">Kontakti</a></li>
                    <li><a href="contactus.php">Saziņa</a></li>
                </ul>
            <li class="active"><a href="registration.php">Reģistrācija</a></li>
            <li><a href="aboutus.php">Par Mums</a></li>
            <li>
                <?php $db->logOut(); ?>
            </li>
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
            <?php $db->listUsers()?>
        </div>
        <div class="col-sm-2">
            <div class="well">
                <p>Reklāma</p>
            </div>
            <div class="well">
                <p>Reklāma</p>
            </div>
            <div>
                <a href="usrList.php">Lietotāji</a>
            </div>
            <div>
                <a href="login.php">Pieslēgties</a>
            </div>
        </div>
    </div>
</div>
<?php
if(@$_POST['uID'] != ''){
    $db->editUsr($_POST['fname'], $_POST['lname'], $_POST['mail'], $_POST['uID']);
}
if(isset($_POST['deleteUser'])){
    $db->deleteUsr($_POST['delUserID']);
}
?>
<footer class="container-fluid">
    Artūrs Kirņickis EDP1 Inc. 2017-2018.gads
</footer>
</body>
</html>