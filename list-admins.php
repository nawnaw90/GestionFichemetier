<?php 
    require("Models/Autoloader.php");
    Autoloader::register();

    session_start();
    $connexion = new Vues();
    
    

 

if(!isset($_SESSION['user'])){

 header('Location:index.php');

}

else {

    $selectAll = database::selectAllAdmin();
    print_r($selectAll);
     echo $connexion->generateGestionAdmins($_SESSION,$selectAll);
} 






  
  



   





