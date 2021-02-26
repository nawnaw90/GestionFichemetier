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


<div class="item-wrapper">
<div class=itemPrincipal>
<div class=item><p>Nom</p></div>
<div class=item><p>Mail</p></div>
<div class=item><p>Password</p></div>
<div class=item><p>Role</p></div>
<div class=item><p>Modifier</p></div>
<div class=item><p>Supprimer</p></div>
</div>


<!-- ADMINS -->
foreach ($listeJeux as $key => $value) {

	echo "<div class='itemJeux'>";
	foreach ($value as $key => $valeur) {
	echo "<div class='item milieu'>";
	if ($key == "Jeux_Id") {
		echo "<img class='hide' src='img/$valeur.jpg'>";
	}
	echo "<p>$valeur</p></div>";

	
	}
	echo "</div>";

</div>






</section>








</body>





