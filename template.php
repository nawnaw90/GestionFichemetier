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

<div class="fiche-metier-description">
	<div class="row">
		<div class="img-wrapper-description"> <img class="img-fiche-metier" src="images/M1805.jpg"> <div class="bar"></div> </div>
	<div class="column">
		<div class="str-wrapper"><p>CODE ROM :<?php echo 'selectAll->code_ROM' ?></p></div>
		<div class="str-wrapper"><h2> TITRE : <?php echo 'selectAll->titre' ?></h2></div>
		<div class="str-wrapper"><p>DESCRIPTION COURTE :<?php echo 'selectAll->description-courte' ?></p></div>
	</div>
	</div>

	<div>
	<div class="str-wrapper"><p>DESCRIPTION LONGUE :<?php echo 'selectAll->description-courte' ?></p></div>
	<div class="str-wrapper"><p>COMPÉTENCES :<?php echo 'selectAll->competences' ?></p></div>
	</div>

</div>






</section>








</body>





