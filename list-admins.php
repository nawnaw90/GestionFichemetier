<?php 
    require("Models/Autoloader.php");
    Autoloader::register();

    session_start();
    $connexion = new Vues();
    
    

 

if(!isset($_SESSION['user'])){

 header('Location:index.php');

}

else {

     if (isset($_POST['modifier-admin'])) {
     	echo $_POST['modifier-admin'];
     }

     if (isset($_POST['supprimer-admin'])) {
     	database::deleteAdmin($_POST['supprimer-admin']);
     }

	

    $selectAll = database::selectAllAdmin();

     echo $connexion->generateGestionAdmins($_SESSION,$selectAll);


} 






  
  



   





