<?php 
    require_once 'config.php';



    if(!empty($_POST['email']) && !empty($_POST['password']))
    {
       
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);
        $role= htmlspecialchars($_POST['role']);
        $nom=htmlspecialchars($_POST['nom']);
        //vérification d'existence
        $check = $bdd->prepare('SELECT  mail, mot_de_passe, role, nom FROM admin WHERE mail = ?');
        $check->execute(array($email));
        $data = $check->fetch();
        $row = $check->rowCount();
        //row =0 si la personne n'existe pas dans la base de données
        if($row == 0){ 
            //vérification si le mot de passe est moins de 100 caractères
            
                if(strlen($email) <= 100){
                    //cérification pour la forme de l'émail
                    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                        if($password == $password_retype){

                            $cost = ['cost' => 12];
                            $password = password_hash($password, PASSWORD_BCRYPT, $cost);
                            //stocker l'adresse Ip dans la variable ip
                            $ip = $_SERVER['REMOTE_ADDR'];
                            var_dump($ip);
                            //insérer tous dans la base de données
                            $insert = $bdd->prepare('INSERT INTO admin(mail, mot_de_passe,role, nom) VALUES(:mail, :mot_de_passe,:role,:nom)');
                            //utiliser un tableau associative
                            $insert->execute(array(
                                
                                'mail' => $email,
                                'mot_de_passe' => $password,
                                'role'=>$role,
                                'nom'=>$nom,
                                
                            ));

                            header('Location:inscriptionForm.php?reg_err=success');
                            die();
                        }else{ header('Location: inscription.php?reg_err=mot_de_passe'); die();}
                    }else{ header('Location: inscription.php?reg_err=mail'); die();}
                }else{ header('Location: inscription.php?reg_err=mail_length'); die();}
            
        }else{ header('Location: inscription.php?reg_err=already'); die();}
    }
