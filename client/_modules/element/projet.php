<?php

/**************************************************
*
*   Requête concernant l'article Projet
*
*************************/


// Récupérer une valeur du projet par rapport à son titre dans l'ordre croissant
    $obj_article = new article("projet");
    $obj_article->fields="id,titre";
    if(!empty($id)){
    $obj_article->where="id=".$id;
    }
    $obj_article->orderby="titre ASC";
    $list_projets=$obj_article->query(); 
    $projet = $list_projets[0];
    $id = $projet['id'];
    $titre_projet = $projet['titre'];    



// Vérifier si l'id du projet existe
if(empty($id)){
    verifTab($id, "Vous avez été redirigé vers la page d'accueil car le projet demandé n'existe pas");
}


?>