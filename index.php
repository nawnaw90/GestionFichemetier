<?php

require("Models/Autoloader.php");
Autoloader::register();
$connexion = new Vues();
session_start();
unset($_SESSION);
session_destroy();




if(isset($_GET['login_err'])) {

echo $connexion->generateConnexion($_GET);


} else {
echo $connexion->generateConnexion();
}

 




