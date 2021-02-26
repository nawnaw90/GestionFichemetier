<?php

 require("Models/Autoloader.php");
    Autoloader::register();

    session_start();




if(!empty($_POST['email']) && !empty($_POST['password']))
    {
	 if (database::verificationIdentite($_POST['email'],$_POST['password'])) {
	  	header('Location:connexion.php');
	  } 
}

