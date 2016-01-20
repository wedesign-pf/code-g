<?php
session_start();
accessAuth();

$obj_article = new article("projet");

// Récupérer le nom de l'utilisateur connecté
$userTitre = $_SESSION['auth']['titre'];

// Récupérer la liste des projets
$obj_article = new article("projet");
$obj_article->fields="id,titre";
$obj_article->orderby="titre ASC";
$list_projet = $obj_article->query(); 

// récupérer la liste des catégories
$mySelect = new mySelect(__FILE__);
$mySelect->tables=$thisSite->PREFIXE_TBL_CLI . "categories";
$mySelect->fields="id,titre";
$mySelect->where="actif=:actif";
$mySelect->whereValue["actif"]="1";
$mySelect->orderby="titre ASC";
$list_categorie = $mySelect->query();

$smarty->assign('user_titre',$userTitre);
$smarty->assign('list_projet',$list_projet);
$smarty->assign('list_categorie',$list_categorie);
?>