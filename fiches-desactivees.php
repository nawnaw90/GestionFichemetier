<?php
require("Models/Autoloader.php");
    Autoloader::register();

    session_start();
    $connexion = new Vues();
    
    
   

if(!isset($_SESSION['user'])){

 header('Location:index.php');

}

else {

    

    if (isset($_POST['activer-fiche'])) {
   
    //FONCTION REQUETE PREPAREE ICI POUR MODIFIER LA FICHE
    database::activerFicheMetier($_POST['activer-fiche']);
    
}  

    if (isset($_POST['supprimer-fiche'])) {
   
    //FONCTION REQUETE PREPAREE ICI POUR MODIFIER LA FICHE
    database::deleteFiche($_POST['supprimer-fiche']);
    
}  
    

    $selectAll = database::selectAllinvisible();
    echo $connexion->generateFichesDesactivees($_SESSION,$selectAll);



   } 


