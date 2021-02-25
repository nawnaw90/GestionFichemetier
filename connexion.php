<?php 
    require("Models/Autoloader.php");
    Autoloader::register();

    session_start();
    $connexion = new Vues();
    $selectAll = database::selectAllVisible();

// vérification email et password existent sinon renvoie index
    if(!empty($_POST['email']) && !empty($_POST['password']))
    {
       $data = database::verificationIdentite($_POST['email'],$_POST['password']);

    }




switch ($data->role) {
    case 'super':
        echo $connexion->generateDashboardAdmin($data,$selectAll);
        break;
    
    default:
        # code...
        break;
}





