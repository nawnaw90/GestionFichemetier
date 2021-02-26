<!-- TEMPLATE POUR TOUTES LES PAGES  -->

<!DOCTYPE html>


<html>
    <head>
       <title>DASHBOARD fiches métiers</title>
       <meta charset="utf-8">
       <link rel="stylesheet" href="css/stylesheet.css" type="text/css">
	</head>









<body>




<section class="dashboard">


<!-- NAV-Replace -->	
<nav>
	<div class="logoWrapper">
		<img class="logo" src="images/logo.png">
	</div>
	<div class="nav-wrapper">

		<h2 class="Welcome-str">Gestionnaire de fiches métiers</h2>
		<h3 class="padding-bottom">Bienvenue <?php echo '$data->Nom' ?></h3>


		<form action="" method="post">
		<button type="submit" name='creationFicheMetier' value='creationFicheMetier' class="btn-nav">Créer une fiche métier</button>
		</form>

		<form action="" method="post">
		<button type="submit" name='creationFicheMetier' value='creationFicheMetier' class="btn-nav">Trier par code ROM croissant</button>
		</form>

		<h2 class="Welcome-str">Super Admin menu</h2>

		<form action="" method="post">
		<button type="submit" name='deconnexion' value='deconnnexion' class="btn-nav">Fiches désactivées</button>
		</form>

		<form action="" method="post">
		<button type="submit" name='deconnexion' value='deconnnexion' class="btn-nav">Gestion Admins</button>
		</form>

		<form action="" method="post">
		<button type="submit" name='deconnexion' value='deconnnexion' class="btn-nav">Déconnexion</button>
		</form>

	</div>
	
	<div class="triangle"></div>


	<div class="logoWrapperBottom">
		<img class="logo" src="images/logo-1.png">
	</div>	
</nav>

<!-- CODE ROM -->
<!-- TITRE -->
<!-- DESC COURTE -->

<!-- Content-Replace -->


<!-- add admin form -->

     <form action="template.php" method="post">
                <h2 class="text-center">Ajouter</h2>       
                <div class="form-group">
                    <input type="text" name="nom" class="form-control" placeholder="Nom" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <input type="password" name="password_retype" class="form-control" placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
                </div>
                <label>Enter role</label>
         <select name="role" required>
             <option value="super">Super-Admin</option>
             <option value="admin">Admin</option>
         </select>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Inscription</button>	
                </div>   

              <input type="checkbox" name="1" id="1" /> <label for="case">PREMIERE COMPETENCES</label>
              <input type="checkbox" name="2" id="2" /> <label for="case">DEUXIEME COMPETENCES</label>
              <input type="checkbox" name="3" id="3" /> <label for="case">troisieme COMPETENCES</label>


            </form>


<?php 
if (isset($_POST)) {
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";
}
?>







</section>








</body>





