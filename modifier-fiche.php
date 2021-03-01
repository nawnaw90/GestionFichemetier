 <?php
 require("Models/Autoloader.php");
    Autoloader::register();

    session_start();
    $connexion = new Vues();
    $selectCode_ROM = database::selectionnerUneFicheMetier($_GET['fiche']);
    

if(!isset($_SESSION['user'])){
 echo 'Vous n\'êtes pas connecté';}
else {

echo $connexion->generateCreateFiche($selectCode_ROM,$_SESSION,"modifier");
//echo $connexion->generateCreateFiche($selectAll,$_SESSION,"modifier");
    

if (isset($_POST['code_ROM'])) {
    //FONCTION REQUETE PREPAREE ICI POUR MODIFIER LA FICHE
    database::modifierFiche();
    echo $_POST['modifier-fiche'];
     
    
}
  

}



        // $selectCode_ROM = database::selectionnerUneFicheMetier($_GET['fiche']);
        // echo $connexion->generateFiche($_SESSION,$selectCode_ROM);
