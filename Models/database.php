<?php 

 class database {


//Access  changer les LOGINS !! TODO? DONE ?


		private static $_host = "localhost";
		private static $_user = "root";
		private static $_mdp = "max";
		private static $_bdd = "gestionfichemetier";

		public static $_connexion;

		public static function createConnexion(){
			self::$_connexion = new pdo("mysql:host=".self::$_host.";dbname=".self::$_bdd.";charset=UTF8", self::$_user, self::$_mdp);
			self::$_connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}



//VERIFICATION SI PRESENCE BASE DE DONNEE

		public static function getAdmin($email){
		self::createConnexion();
        $check = self::$_connexion->prepare('SELECT mail, mot_de_passe, role, nom FROM admin WHERE mail = ?');
   
        $check->execute(array($email));

        $data = $check->fetch(PDO::FETCH_OBJ);

        return $data;
    }



//VERIFICATION IDENTIÉ

		public static function verificationIdentite($email,$password){
		self::createConnexion();

        $check = self::$_connexion->prepare('SELECT mail, mot_de_passe, role, nom FROM admin WHERE mail = ?');
   
        $check->execute(array($email));

        $data = $check->fetch(PDO::FETCH_OBJ);

        $row = $check->rowCount();



        if($row == 1)
        {	
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                
                if(password_verify($password, $data->mot_de_passe))
                {

                    $_SESSION['user'] = $data;
                    return true;
          
                }else{ header('Location: index.php?login_err=password'); die(); }
            }else{ header('Location: index.php?login_err=email'); die(); }
        }else{ header('Location: index.php?login_err=already'); die(); }
    }




// Sélectionner les fiches métiers

		public static function selectAll(){
			self::createConnexion();
			
			$query = self::$_connexion->query("SELECT * FROM `Fichemetier`");

			$selectAll = $query->fetchAll(PDO::FETCH_OBJ);

			return $selectAll;
			
		}




// Sélectionner les fiches métiers avec vues = 1

		public static function selectAllVisible(){
			self::createConnexion();
			
			$query = self::$_connexion->query("SELECT * FROM `fichemetier` WHERE `vues`=1 ");

			$selectAll = $query->fetchAll(PDO::FETCH_OBJ);

			return $selectAll;
			
		}





// Sélectionner les fiches métiers avec vues = 0

		public static function selectAllInvisible(){
			self::createConnexion();
			
			$query = self::$_connexion->query("SELECT * FROM `Fichemetier` WHERE `vues`=0 ");

			$selectAll = $query->fetchAll(PDO::FETCH_OBJ);

			return $selectAll;
			
		}





// Sélectionner une fiche métier

		public static function selectionnerUneFicheMetier($tuple){
			self::createConnexion();
			
			$sql = "SELECT * FROM `fichemetier` WHERE `code_ROM` = :id_tuple";
            $data = self::$_connexion->prepare($sql);
            $data->bindValue(":id_tuple", $tuple);
            $data->execute();
            $fiche = $data->fetch(PDO::FETCH_OBJ);
            return $fiche;
			
		}





// Ajouter une fiche métier

		public static function createFiche($post){
			self::createConnexion();
			try{

				
				$sql = "INSERT INTO `Fichemetier`( `code_ROM`, `titre`,`description_courte`, `description_longue`) VALUES (:code_ROM,:titre,:description_courte,:description_longue)";

				$req = self::$_connexion->prepare($sql);
				$req->bindValue(":code_ROM", $genreTitre);
				$req->bindValue(":titre", $genreDescription);
				$req->bindValue(":description_courte", $genreTitre);
				$req->bindValue(":description_longue", $genreDescription);


				$req->execute();
				
				return true;
			} catch(PDOException $e) {
				
				return false;
			}
		}





// Modifier une fiche métier


		public static function modifierFiche($post){
			self::createConnexion();
			try{
				$sql = "UPDATE `Fichemetier` SET `code_ROM`=?, `titre`=? ,`description_courte`=?, `description_longue`=? WHERE `code_ROM`=".$post['code_ROM'];

				$req = self::$_connexion->prepare($sql);
				
				$req->execute(array($post['code_ROM'],$post['titre'],$post['description_courte'],$post_['description_longue']));
				
				return true;
			} catch(PDOException $e) {
				
				return false;
			}
		}





// Désactiver une fiche métier

		public static function desactiverFicheMetier($post){
			self::createConnexion();
			try{
				$sql = "UPDATE `fichemetier` SET `vues`= 0 WHERE `code_ROM` = :code";

				$req = self::$_connexion->prepare($sql);
				
				$req->execute([":code"=>$post]);
				
				return true;
			} catch(PDOException $e) {
				
				return false;
			}
		}





// Activer une fiche métier

		public static function activerFicheMetier($post){
			self::createConnexion();
			try{
				$sql = "UPDATE `fichemetier` SET `vues`= 1 WHERE `code_ROM` = :code";

				$req = self::$_connexion->prepare($sql);
				
				$req->execute([":code"=>$post]);
				
				return true;
			} catch(PDOException $e) {
				
				return false;
			}
		}





//CRUD POUR LE SUPER ADMINISTRATEUR DE LA MORT ---------------------------------------------------------------------------------
//CRUD POUR LE SUPER ADMINISTRATEUR DE LA MORT ---------------------------------------------------------------------------------
//CRUD POUR LE SUPER ADMINISTRATEUR DE LA MORT ---------------------------------------------------------------------------------






// Ajouter un Admin

 		public static function selectAllAdmin(){
		self::createConnexion();
        $check = self::$_connexion->prepare('SELECT * FROM `admin` WHERE `role` = "admin" ');
   
        $check->execute();

        $data = $check->fetch(PDO::FETCH_OBJ);

        return $data;
    }



//Supprimer un Admin
   //  public static function deleteAdmin($post)
   //  {
   //      self::createConnexion();
   //      try{
				
			// 	$sql = "DELETE FROM `admin` WHERE mail=:mail";

			// 	$req = self::$_connexion->prepare($sql);
			// 	$req->bindValue(":mail", $post?????????????????????????????);
   //              $req->execute();
				
			// 	return true;
			// } catch(PDOException $e) {
				
			// 	return false;
			// }
   //  }



 //changer un Admin
  //   public static function modifierAdmin($post){
		// 	self::createConnexion();
		// 	try{
		// 		$sql = "UPDATE `admin` SET `mail`:mail, `mot_de_passe`=:password ,`nom`=:nom, `role`=:role WHERE `mail`= :mail";

		// 		$req = self::$_connexion->prepare($sql);
		// 		$req->bindValue(":mail", $post?????????????????????????????);
		// 		$req->bindValue(":password", $post?????????????????????????????);
  //               $req->bindValue(":nom", $post?????????????????????????????);
  //               $req->bindValue(":role", $post?????????????????????????????);
		// 		$req->execute();
				
		// 		return true;
		// 	} catch(PDOException $e) {
				
		// 		return false;
		// 	}
		// }




//changer mot de passe
  //   public static function modifierPassword($post){
		// 	self::createConnexion();
		// 	try{
		// 		$sql = "UPDATE `admin` SET  `mot_de_passe`=:password WHERE `mail`=:mail";

		// 		$req = self::$_connexion->prepare($sql);
		// 		$req->bindValue(":mail", $post?????????????????????????????);
  //               $req->bindValue(":password", $post?????????????????????????????);
				
		// 		return true;
		// 	} catch(PDOException $e) {
				
		// 		return false;
		// 	}
		// }

    
}

 