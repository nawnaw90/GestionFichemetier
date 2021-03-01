<?php
 require("Models/Autoloader.php");
    Autoloader::register();

    session_start();
    $connexion = new Vues();
   
    

if(!isset($_SESSION['user'])){

  header('Location:index.php');}
else {

echo $connexion->generateCreateAdmin($_SESSION);
print_r($_POST);
if(isset($_POST['ajouter-admin'])){
database::AjoutAdmin($_POST);

 }
}