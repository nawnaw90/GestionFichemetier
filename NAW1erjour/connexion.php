<?php 
    session_start();
    require_once 'config.php';
// vérification email et password existent sinon renvoie index
    if(!empty($_POST['email']) && !empty($_POST['password']))
    {
        //stocker les posts dans htmlspecialchars pour eviter la faill sccss
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        //check pour vérifiier si la personne est bien inscrite en base de données
        $check = $bdd->prepare('SELECT mail, mot_de_passe,role FROM admin WHERE mail = ?');
       //on met ça dans un tableau
        $check->execute(array($email));
        // stocker les données dans data et faire la recherche avec fetch, Cette méthode permet l’échange de données avec le serveur de manière asynchrone
        $data = $check->fetch(PDO::FETCH_OBJ);
        //rowCount pour vérifier s il existe
        $row = $check->rowCount();
        //row 1 le compte existe
        if($row == 1)
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                if(password_verify($password, $data->mot_de_passe))
                {
                    $_SESSION['user'] = $data;
                    header('Location: espaceAdmin.php');
                    die();
                }else{ header('Location: index.php?login_err=mot_de_passe'); die(); }
            }else{ header('Location: index.php?login_err=mail'); die(); }
        }else{ header('Location: index.php?login_err=already'); die(); }
    }else{
        header('Location: index.php'); die();
    }
