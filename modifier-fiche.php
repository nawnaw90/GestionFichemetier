 <?php
 require("Models/Autoloader.php");
    Autoloader::register();

    session_start();
    $connexion = new Vues();
    $selectAll = database::selectAllVisible();
    

if(!isset($_SESSION['user'])){
 echo 'Vous n\'êtes pas connecté';}
else {


echo $connexion->generateCreateFiche($selectAll,$_SESSION,"modifier");

if (isset($_POST['modifier-fiche'])) {
    //FONCTION REQUETE PREPAREE ICI POUR MODIFIER LA FICHE
    echo $_POST['modifier-fiche'];
}
  

}



        // $selectCode_ROM = database::selectionnerUneFicheMetier($_GET['fiche']);
        // echo $connexion->generateFiche($_SESSION,$selectCode_ROM);
