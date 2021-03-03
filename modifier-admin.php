<?php
 require("Models/Autoloader.php");
    Autoloader::register();

    session_start();
    $connexion = new Vues();
    $selectId_Admin = database::getAdmin($_POST['modifier-admin']);
    //print_r($selectId_Admin);
    

if(!isset($_SESSION['user'])){
 echo 'Vous n\'êtes pas connecté';}
else  if ( $_SESSION['user']->role=='super') {

    
        

    if (isset($_POST['email'])) {
        //$selectId_Admin = database::getAdmin($_POST['email']);
        //FONCTION REQUETE PREPAREE ICI POUR MODIFIER LA FICHE
        database::modifierAdmin($_POST);
        echo $_POST['modifier-Admin'];
        
        
    }
  
    echo $connexion->generateModifView($_SESSION, $selectId_Admin);
    //echo $connexion->generateCreateFiche($selectAll,$_SESSION,"modifier");
}
