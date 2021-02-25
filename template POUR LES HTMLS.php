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

		<h2 class="text-center">Gestionnaire de fiches métiers</h2>

	</div>
	
	<div class="triangle"></div>


	<div class="logoWrapperBottom">
		<img class="logo" src="images/logo-1.png">
	</div>	
</nav>



<!-- Content-Replace -->
<div class="main-wrapper">
<form class="formConnexion"action="../Models/connexion.php" method="post">


			<div class="white">
	        <h2 class="text-center">Connexion</h2>
	        <div class="bar"></div>
	        </div>



	        <div class="form-group">
	        	<p><em>Email :</em></p>
	        	<input type="email" name="email" class="form-control" placeholder="Email" required="required" autocomplete="off">
	        </div>

	        <div class="form-group">
	        	<p><em>Mot de passe :</em></p>
	        	<input type="password" name="password" class="form-control" placeholder="Mot de passe" required="required" autocomplete="off">
	        </div>

	        <div class="form-group">
	                <button type="submit" class="btn-submit">Connexion</button>
	        </div>

	         <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
                            <div class="alert-danger">
                                <strong>Erreur</strong> mot de passe incorrect
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert-danger">
                                <strong>Erreur</strong> email incorrect
                            </div>
                        <?php
                        break;

                        case 'already':
                        ?>
                            <div class="alert-danger">
                                <strong>Erreur</strong> compte non existant
                            </div>
                        <?php
                        break;
                    }
                }
                ?> 
	

</form>
</div>



</section>








<div class="blank"></div>



<section class="dashboard">


<!-- NAV REPLACE -->	
<!-- <nav>
	<div class="logoWrapper">
		<img class="logo" src="images/logo.png">
	</div>

	<h2 class="text-center">Gestionnaire de fiches métiers</h2>

		<h3>Bienvenue NOM</h3>
		<form action="" method="post">
			<button type="submit" name='deconnexion' value='deconnnexion' class="btn-disconnect">Déconnexion</button>
		</form>
	
	<div class="triangle"></div>


	<div class="logoWrapperBottom">
		<img class="logo" src="images/logo-1.png">
	</div>	
</nav>
 -->


<!-- Content-Replace -->
<div class="main-wrapper">


<!-- FICHE METIER MOCK -->
<div class="fiche-metier-wrapper">
	<div class="img-wrapper"> <img class="img-fiche-metier" src="images/img.jpg"> <div class="bar"></div> </div>
	<div class="str-wrapper absoluteTR"><p>Code ROM : M1805</p></div>
	<div class="str-wrapper"><h2>Titre : Études et développement informatique</h2></div>
	<div class="str-wrapper"><p><strong>Description courte :</strong> Conçoit, développe et met au point un projet d'application informatique, de la phase d'étude à son intégration</p></div>
	<div class="str-wrapper">
		<form action="" method="post">
			<button type="submit" name='modifier' value='modifier' >Modifier</button>
		</form>
		<form action="" method="post">
			<button type="submit" name='supprimer' value='supprimer' >Supprimer</button>
		</form>
	</div>
</div>
<!-- FICHE METIER MOCK -->
<div class="fiche-metier-wrapper">
	<div class="img-wrapper"> <img class="img-fiche-metier" src="images/img.jpg"> <div class="bar"></div> </div>
	<div class="str-wrapper absoluteTR"><p>Code ROM : M1805</p></div>
	<div class="str-wrapper"><h2>Titre : Études et développement informatique</h2></div>
	<div class="str-wrapper"><p><strong>Description courte :</strong> Conçoit, développe et met au point un projet d'application informatique, de la phase d'étude à son intégration</p></div>
	<div class="str-wrapper">
		<form action="" method="post">
			<button type="submit" name='modifier' value='modifier' >Modifier</button>
		</form>
		<form action="" method="post">
			<button type="submit" name='supprimer' value='supprimer' >Supprimer</button>
		</form>
	</div>
</div>

<!-- FICHE METIER MOCK -->
<div class="fiche-metier-wrapper">
	<div class="img-wrapper"> <img class="img-fiche-metier" src="images/img.jpg"> <div class="bar"></div> </div>
	<div class="str-wrapper absoluteTR"><p>Code ROM : M1805</p></div>
	<div class="str-wrapper"><h2>Titre : Études et développement informatique</h2></div>
	<div class="str-wrapper"><p><strong>Description courte :</strong> Conçoit, développe et met au point un projet d'application informatique, de la phase d'étude à son intégration</p></div>
	<div class="str-wrapper">
		<form action="" method="post">
			<button type="submit" name='modifier' value='modifier' >Modifier</button>
		</form>
		<form action="" method="post">
			<button type="submit" name='supprimer' value='supprimer' >Supprimer</button>
		</form>
	</div>
</div>

<!-- FICHE METIER MOCK -->
<div class="fiche-metier-wrapper">
	<div class="img-wrapper"> <img class="img-fiche-metier" src="images/img.jpg"> <div class="bar"></div> </div>
	<div class="str-wrapper absoluteTR"><p>Code ROM : M1805</p></div>
	<div class="str-wrapper"><h2>Titre : Études et développement informatique</h2></div>
	<div class="str-wrapper"><p><strong>Description courte :</strong> Conçoit, développe et met au point un projet d'application informatique, de la phase d'étude à son intégration</p></div>
	<div class="str-wrapper">
		<form action="" method="post">
			<button type="submit" name='modifier' value='modifier' >Modifier</button>
		</form>
		<form action="" method="post">
			<button type="submit" name='supprimer' value='supprimer' >Supprimer</button>
		</form>
	</div>
</div>

<!-- FICHE METIER MOCK -->
<div class="fiche-metier-wrapper">
	<div class="img-wrapper"> <img class="img-fiche-metier" src="images/img.jpg"> <div class="bar"></div> </div>
	<div class="str-wrapper absoluteTR"><p>Code ROM : M1805</p></div>
	<div class="str-wrapper"><h2>Titre : Études et développement informatique</h2></div>
	<div class="str-wrapper"><p><strong>Description courte :</strong> Conçoit, développe et met au point un projet d'application informatique, de la phase d'étude à son intégration</p></div>
	<div class="str-wrapper">
		<form action="" method="post">
			<button type="submit" name='modifier' value='modifier' >Modifier</button>
		</form>
		<form action="" method="post">
			<button type="submit" name='supprimer' value='supprimer' >Supprimer</button>
		</form>
	</div>
</div>

<!-- FICHE METIER MOCK -->
<div class="fiche-metier-wrapper">
	<div class="img-wrapper"> <img class="img-fiche-metier" src="images/img.jpg"> <div class="bar"></div> </div>
	<div class="str-wrapper absoluteTR"><p>Code ROM : M1805</p></div>
	<div class="str-wrapper"><h2>Titre : Études et développement informatique</h2></div>
	<div class="str-wrapper"><p><strong>Description courte :</strong> Conçoit, développe et met au point un projet d'application informatique, de la phase d'étude à son intégration</p></div>
	<div class="str-wrapper">
		<form action="" method="post">
			<button type="submit" name='modifier' value='modifier' >Modifier</button>
		</form>
		<form action="" method="post">
			<button type="submit" name='supprimer' value='supprimer' >Supprimer</button>
		</form>
	</div>
</div>

<!-- FICHE METIER MOCK -->
<div class="fiche-metier-wrapper">
	<div class="img-wrapper"> <img class="img-fiche-metier" src="images/img.jpg"> <div class="bar"></div> </div>
	<div class="str-wrapper absoluteTR"><p>Code ROM : M1805</p></div>
	<div class="str-wrapper"><h2>Titre : Études et développement informatique</h2></div>
	<div class="str-wrapper"><p><strong>Description courte :</strong> Conçoit, développe et met au point un projet d'application informatique, de la phase d'étude à son intégration</p></div>
	<div class="str-wrapper">
		<form action="" method="post">
			<button type="submit" name='modifier' value='modifier' >Modifier</button>
		</form>
		<form action="" method="post">
			<button type="submit" name='supprimer' value='supprimer' >Supprimer</button>
		</form>
	</div>
</div>



</div>



</section>








</body>





