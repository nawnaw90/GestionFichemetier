<?php
 require("Models/Autoloader.php");
    Autoloader::register();

    session_start();
    $connexion = new Vues();
   
    

if(!isset($_SESSION['user']) ){

  header('Location:index.php');}
else if ( $_SESSION['user']->role=='super'){

echo $connexion->generateCreateAdmin($_SESSION);
print_r($_POST);
if(isset($_POST['ajouter-admin'])){
database::AjoutAdmin($_POST);

 }
}