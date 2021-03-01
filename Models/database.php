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
			
			$query = self::$_connexion->query("SELECT * FROM `fichemetier`");

			$selectAll = $query->fetchAll(PDO::FETCH_OBJ);

			return $selectAll;
			
		}


// Sélectionner les compétences

		public static function selectAllCompetences(){
			self::createConnexion();
			
			$query = self::$_connexion->query("SELECT * FROM `competences`");

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
        $sql = "INSERT INTO `fichemetier`( `code_ROM`, `titre`,`description_courte`, `description_longue`) VALUES (:code_ROM,:titre,:description_courte,:description_longue)";

        $req = self::$_connexion->prepare($sql);
        $req->bindValue(":code_ROM", $_POST['code_ROM']);
        $req->bindValue(":titre", $_POST['titre']);
        $req->bindValue(":description_courte", $_POST['description_courte']);
        $req->bindValue(":description_longue", $_POST['description_longue']);

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






// Get ADMIN

 		public static function selectAllAdmin(){
		self::createConnexion();
        $check = self::$_connexion->prepare('SELECT * FROM `admin` WHERE `role` = "admin" ');
   
        $check->execute();

        $data = $check->fetchAll(PDO::FETCH_OBJ);

        return $data;
    }


// Get SUPER

 		public static function selectAllSuper(){
		self::createConnexion();
        $check = self::$_connexion->prepare('SELECT * FROM `admin` WHERE `role` = "super" ');
   
        $check->execute();

        $data = $check->fetchAll(PDO::FETCH_OBJ);

        return $data;
    }

// DELETE ADMIN

 public static function deleteAdmin($email){
    self::createConnexion();
    $check = self::$_connexion->prepare('SELECT mail, mot_de_passe, role, nom FROM admin WHERE mail = ?');
    $check->execute(array($email));
    $row = $check->rowCount();
    if($row == 1){
    $sql = "DELETE FROM `admin` WHERE mail=:mail";
    $req = self::$_connexion->prepare($sql);
    $req->bindValue(":mail", $email);
    $req->execute();}
    return true;
    }


//Ajouter un Admin Naw
        public static function AjoutAdmin($data){
        self::createConnexion();
        $check = self::$_connexion->prepare('SELECT  mail, mot_de_passe, role, nom FROM admin WHERE mail = ?');
        $check->execute(array($data['email']));
        $row = $check->rowCount();
        if($row == 0){ 
            //vérification si le mot de passe est moins de 100 caractères
            
                if(strlen($data['email']) <= 100){
                    //vérification pour la forme de l'émail
                    if(filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
                        if($data['password'] == $data['password_retype']){

                            $cost = ['cost' => 12];
                            $data['password'] = password_hash($data['password'], PASSWORD_BCRYPT, $cost);
                            //insérer tous dans la base de données
                            $insert = self::$_connexion->prepare('INSERT INTO admin(mail, mot_de_passe,role, nom) VALUES(:mail, :mot_de_passe,:role,:nom)');
                            //utiliser un tableau associative
                            $insert->execute(array(
                                
                                'mail' => $data['email'],
                                'mot_de_passe' => $data['password'],
                                'role'=>$data['role'],
                                'nom'=>$data['nom'],
                                
                            ));

                            header('Location:inscriptionForm.php?reg_err=success');
                            die();
                        }else{ header('Location: inscription.php?reg_err=mot_de_passe'); die();}
                    }else{ header('Location: inscription.php?reg_err=mail'); die();}
                }else{ header('Location: inscription.php?reg_err=mail_length'); die();}
            
        }else{ header('Location: inscription.php?reg_err=already'); die();}
    }

    
}

 