<?php 
    require("Models/Autoloader.php");
    Autoloader::register();

    session_start();
    $connexion = new Vues();
    
    

 

if(!isset($_SESSION['user'])){

 header('Location:index.php');

}

else {




    if (isset($_POST['desactiver-fiche'])) {
   
    //FONCTION REQUETE PREPAREE ICI POUR MODIFIER LA FICHE
    database::desactiverFicheMetier($_POST['desactiver-fiche']);
    
}
    $selectAll = database::selectAllVisible();

     if (isset($_GET['fiche'])) {
        $selectCode_ROM = database::selectionnerUneFicheMetier($_GET['fiche']);
        echo $connexion->generateFiche($_SESSION,$selectCode_ROM);
} else {


    echo $connexion->generateDashboardAdmin($_SESSION,$selectAll);

    //    switch ($_SESSION['user']->role) {
    //     case 'super':
    //         echo $connexion->generateDashboardAdmin($_SESSION,$selectAll);
    //         break;
        
    //     default:
    //         # code...
    //         break;
    // }

   } 



} 
       



   





