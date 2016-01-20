<?php
/**************************************************
*
*   Requête concernant l'article champ
*
*************************/

// Récupérer les champs
    $obj_article = new article("champ");
    $obj_article->fields="id,titre,filtre1";
    $result=$obj_article->query(); 
    $list_champ=array();
    $list_champ_crypte=array();
    foreach($result as $Kr => $datas){ 
        $list_champ[$Kr]= array('id' => $datas["id"], 'titre' => $datas['titre'], 'filtre' => $datas['filtre1']);
        if($datas["filtre1"]=="1") { $list_champ_crypte[]=$datas["id"]; }
    }

/*// Vérifier si les éléments existent pour le projet demandé
    verifTab($list_element, "Vous avez été redirigé vers la page d'accueil car le projet ne contient aucun élément");*/