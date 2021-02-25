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

}

