<?php
session_start();

// Si la Session de l'utilisateur existe, le rediriger vers page accueil 
if(!empty($_SESSION['auth'])){
    unset($_SESSION['notification']);
    header('Status: 301 Moved Permanently', true, 301);
    header('Location: ./element');
    exit();
}



// Lors de la soumission du formulaire
if(!empty($_POST)){

    /************************** 
    * 
    *  REGLE DE VALIDATION
    *  @email type=email not null
    *  @password type=password not null
    *
    *********************************************/
    
    $errors = array();
        
    // Checker l'adresse mail
    $email = check_mail($_POST['email']);
    
    if(!$email){
        $errors['email'] = "Votre adresse email n'est pas valide";
        $smarty->assign('errors',$errors);
    }

    // On vérifie si le champ mot de passe à bien été saisie, si oui on le crypte en md5
    if(empty($_POST['password'])){
        $errors['password'] = "Un mot de passe est requis";
        $smarty->assign('errors',$errors);
    }else{
        $password = md5($_POST['password']);
    }
    
    
    /************************** 
    * 
    *  AUTHENTIFICATION DE L'UTILISATEUR
    *  - Vérifier si l'utilisateur existe en BDD, selon les paramères saisie dans le formulaire de connexion
    *
    *********************************************/

    // Récupérer l'utilisateur qui correspond au données saisies
    $mySelect = new mySelect(__FILE__);
    $mySelect->tables=$thisSite->PREFIXE_TBL_CLI . "utilisateurs";
    $mySelect->fields="id,titre,email,id_type";
    $mySelect->where="actif=:actif AND email=:email AND mdp=:mdp";
    $mySelect->whereValue["actif"]="1";
    $mySelect->whereValue["email"]=$_POST['email'];
    $mySelect->whereValue["mdp"]=$password;
    $user=$mySelect->query();
    
    
    // Si l'utilisateur existe en base de données grâce aux informations saisies alors
    if(!empty($user)){
        
        // Récupérer le titre du type d'utilisateur de l'utilisateur en question
        $obj_article = new article("type_utilisateur");
        $obj_article->fields="id,titre";
        $obj_article->where="id=".$user[0]['id_type'];
        // $obj_article->whereValue["idType"]=$user[0]['id_type'];
        $tabType=$obj_article->query(); 

        // Injectetr dans le tableau Utilisateur le type utilisateur
        foreach($user as $value){ 
            $user[0]['type']=$tabType[0][titre];
        }
    
        // Enregistrer les valeurs de l'utilisateur en Session
        $auth = current($user);
        $_SESSION['auth'] = $auth;
        
        // Si la case se souvenir de moi est cochée alors
            // Enregistrer les valeurs dans le cookie
        if($_POST['remember']){
            setcookie("UserCookie", $user['email'], time() + 60 * 60 * 24 * 14);
        }
        
        // Redirection page accueil (fichier:_pages/element.php, _pages/element.tpl)
		header('Location: ./element');

    }else{
        $errors['connexion'] = "Adresse mail ou mot de passe incorrecte"; 
        $smarty->assign('errors',$errors);
    }  
    
}