<?php

class Vues{

	function generateConnexion($vues = ""){

		$template = file_get_contents("Vues/template.tpl");

		$Nav = file_get_contents("Vues/nav_connexion.tpl");

		$str_replace1 = str_replace("<!-- NAV-Replace -->", $Nav, $template);

		$content = file_get_contents("Vues/connexion.tpl");



		if (!empty($vues)) {
			
		switch ($vues['login_err']) {

		case 'password':
			
			$error = file_get_contents("Vues/msgError.tpl");

			$err = str_replace("<!--msgError-->", $error , $content);

			break;

		case 'email':
			
			$error = file_get_contents("Vues/msgErrorEmail.tpl");

			$err = str_replace("<!--msgError-->", $error ,$content);

			break;

		case 'already':
			
			$error = file_get_contents("Vues/msgErrorAlready.tpl");

			$err = str_replace("<!--msgError-->", $error ,$content);

			break;

		
		case '':

			$err = str_replace("<!--msgError-->", "" ,$content);

			break;
	}

		return str_replace("<!-- Content-Replace -->", $err, $str_replace1);
}

		return str_replace("<!-- Content-Replace -->", $content, $str_replace1);
			
		}



		function generateDashboardAdmin($user,$data){

		$template = file_get_contents("Vues/template.tpl");

		if ($user['user']->role == "super") {
			$Nav = file_get_contents("Vues/nav_super.tpl");
		} else {
			$Nav = file_get_contents("Vues/nav_admin.tpl");
		}

		$NavAdmin = str_replace("<!-- Nom -->", $user['user']->nom, $Nav);

		$str_replace1 = str_replace("<!-- NAV-Replace -->", $NavAdmin, $template);
	

		$content = file_get_contents("Vues/liste_fiches.tpl");
		$contents = "";

		foreach ($data as $fiche_metier => $valbis) {
			$c = str_replace("<!-- CODE ROM -->", $valbis->code_ROM , $content);
			$c = str_replace("<!-- TITRE -->", $valbis->titre , $c);
			$c = str_replace("<!-- DESC COURTE -->", substr($valbis->description_courte, 0, 100)."...", $c);
			$contents .= $c;
		}
		return str_replace("<!-- Content-Replace -->", $contents, $str_replace1);
		}


		function generateFichesDesactivees($user,$data){

		$template = file_get_contents("Vues/template.tpl");

		if ($user['user']->role == "super") {
			$Nav = file_get_contents("Vues/nav_super.tpl");
		} else {
			$Nav = file_get_contents("Vues/nav_admin.tpl");
		}

		$NavAdmin = str_replace("<!-- Nom -->", $user['user']->nom, $Nav);

		$str_replace1 = str_replace("<!-- NAV-Replace -->", $NavAdmin, $template);
	

		$content = file_get_contents("Vues/liste_fiches_desactivees.tpl");
		$contents = "";

		foreach ($data as $fiche_metier => $valbis) {
			$c = str_replace("<!-- CODE ROM -->", $valbis->code_ROM , $content);
			$c = str_replace("<!-- TITRE -->", $valbis->titre , $c);
			$c = str_replace("<!-- DESC COURTE -->", substr($valbis->description_courte, 0, 100)."...", $c);
			$contents .= $c;
		}
		return str_replace("<!-- Content-Replace -->", $contents, $str_replace1);
		}



		function generateFiche($user,$data){

		$template = file_get_contents("Vues/template.tpl");

		if ($user['user']->role == "super") {
			$Nav = file_get_contents("Vues/nav_super.tpl");
		} else {
			$Nav = file_get_contents("Vues/nav_admin.tpl");
		}

		
		$NavAdmin = str_replace("<!-- Nom -->", $user['user']->nom, $Nav);

		$str_replace1 = str_replace("<!-- NAV-Replace -->", $NavAdmin, $template);
	

		$content = file_get_contents("Vues/fiche_detail.tpl");
		$contents = "";

		
			$c = str_replace("<!-- CODE ROM -->", $data->code_ROM , $content);
			$c = str_replace("<!-- TITRE -->", $data->titre , $c);
			$c = str_replace("<!-- DESC COURTE -->", $data->description_courte, $c);
			$c = str_replace("<!-- DESC LONGUE -->", $data->description_longue, $c);
			$contents .= $c;
		

		$competences = file_get_contents("Vues/competences.tpl");

		$competences_replace = str_replace("<!-- COMPETENCES LISTE -->", $competences, $contents);

		foreach ($data as $fiche_metier => $valbis) {
			$content_competence = str_replace("<!-- CODE ROM -->", $data->code_ROM , $contents);
		}


		return str_replace("<!-- Content-Replace -->", $content_competence, $str_replace1);
		}




	function generateCreateFiche($database, $user, $vues=""){
		$template = file_get_contents("Vues/template.tpl");

		if ($user['user']->role == "super") {
			$Nav = file_get_contents("Vues/nav_super.tpl");
		} else {
			$Nav = file_get_contents("Vues/nav_admin.tpl");
		}
		

	
		$NavAdmin = str_replace("<!-- Nom -->", $user['user']->nom, $Nav);

		
		$str_replace1 = str_replace("<!-- NAV-Replace -->", $NavAdmin, $template);
	
	
		switch ($vues) {
			case 'modifier':

					$content = file_get_contents("Vues/modifier_fiche.tpl");
					$contents = "";
					foreach ($database as $key => $value) {
						
					$c = str_replace("<!-- CODE ROM -->", $value->code_ROM , $content);
					$c = str_replace("<!-- TITRE -->", $value->titre , $c);
					$c = str_replace("<!-- DESC COURTE -->", $value->description_courte, $c);
					$c = str_replace("<!-- DESC LONGUE -->", $value->description_longue, $c);

					}
	
					$contents .= $c;


				break;
			
			case 'ajouter':

				$competences_obj = database::selectAllCompetences();

				$content_competence = file_get_contents("Vues/liste_competences.tpl");
				$contentss = "";

				foreach ($competences_obj as $key => $value) {
					$c = str_replace("<!-- idCompetence -->", $value->idCompetence , $content_competence);
					$c = str_replace("<!-- nomCompetence -->", $value->nomCompetence , $c);
					$contentss .= $c;
				}


				$content = file_get_contents("Vues/ajouter_fiche.tpl");

				$contents = str_replace("<!-- COMPETENCES REPLACE -->", $contentss , $content);



				break;


		}
		

		
		return str_replace("<!-- Content-Replace -->", $contents, $str_replace1);
	}
			



function generateGestionAdmins($user,$data){

		$template = file_get_contents("Vues/template.tpl");

		$Nav = file_get_contents("Vues/nav_super.tpl");

		$NavAdmin = str_replace("<!-- Nom -->", $user['user']->nom, $Nav);

		$str_replace1 = str_replace("<!-- NAV-Replace -->", $NavAdmin, $template);



		$contentGlobal = file_get_contents("Vues/liste_admins.tpl");

		$content_admins = file_get_contents("Vues/admin.tpl");



		$contents ="";
		foreach ($data as $key => $value) {
			$c = str_replace("<!-- NOM -->", $value->nom , $content_admins);
			$c = str_replace("<!-- MAIL -->", $value->mail , $c);
			$c = str_replace("<!-- ROLE -->", $value->role, $c);

			$contents .= $c;
			
		}
		
		$replacement = str_replace("<!-- ADMINS -->", $contents, $contentGlobal);

	
		return str_replace("<!-- Content-Replace -->", $replacement, $str_replace1);
		}



}


	
