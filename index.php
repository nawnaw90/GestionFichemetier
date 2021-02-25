<?php

//autoloader qui charge toutes les classes
require("Models/Autoloader.php");
Autoloader::register();
$connexion = new Vues();

if(isset($_GET['login_err'])) {

echo $connexion->generateConnexion($_GET);


} else {
echo $connexion->generateConnexion();
}



