 <?php
 require("Models/Autoloader.php");
    Autoloader::register();

    session_start();
    $connexion = new Vues();
    $selectAll = database::selectAllVisible();
    

if(!isset($_SESSION['user'])){
  header('Location:index.php');}
else {

echo $connexion->generateCreateFiche($_SESSION);

if (isset($_POST['ajouter-fiche'])) {
    //FONCTION REQUETE PREPAREE ICI POUR AJOUTER LA FICHE
    
}
  
    

}

