<?php
 require("Models/Autoloader.php");
    Autoloader::register();

    session_start();
    $connexion = new Vues();

    // echo "<pre>";
    // print_r($selectAll);
    // echo "</pre>";
    

if(!isset($_SESSION['user'])){
  header('Location:index.php');}
else {
if (isset($_POST['ajouter-competence'])) {
    //FONCTION REQUETE PREPAREE ICI POUR AJOUTER LA FICHE
    database::createCompetences($_POST['nomCompetence']);
header('Location:connexion.php');

}
if(isset($_POST['supr-competence']))
    
    foreach($_POST['competence'] as $value)
    {
        var_dump($value);
        database::deleteCompetences($value);
    }
echo $connexion->generateCreateCompetence($_SESSION);
}


