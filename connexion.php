<?php 
    require("Models/Autoloader.php");
    Autoloader::register();

    session_start();


    print_r($_SESSION);

    echo "<br>";


// vérification email et password existent sinon renvoie index
    if(!empty($_POST['email']) && !empty($_POST['password']))
    {
       $data = database::verificationIdentite($_POST['email'],$_POST['password']);
       print_r($data);
    }




