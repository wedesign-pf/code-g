<?php
    session_start();
    include_once("../../../init.php"); 
    accessAuth();

// Récupérer le nom de l'utilisateur
    $userTitre = $_SESSION['auth']['titre'];
    $SessionIdType = $_SESSION['auth']['id_type'];

// Traitement de l'id passer en GET
if(isset($__GET['id'])){
    
    // Doit etre uniquement en entier
    $id = intval($__GET['id']);
    $var_field_id = "id_projet";

// Récupérer une valeur du projet par rapport à son titre dans l'ordre croissant
    include("../element/projet.php");

// Récupérer les éléments par rapport au projet
    include("../element/elements.php");

// Récupérer les catégories par rapport aux éléments donnée par la requête $tabElement
    include("../element/categories.php");

// Récupérer les champs
    include("../element/champs.php");

// Inclure le fichier des portions de codes suivants 
    include("../element/partials.php");


    $smarty->assign('user_titre',$userTitre);
    $smarty->assign('SessionIdType',$SessionIdType);
    $smarty->assign('projet', $projet);
    $smarty->assign('id_projet', $id_projet);
    $smarty->assign('list_element', $list_element);
    $smarty->assign('list_Champ_Valeur', $list_Champ_Valeur);

   $dataAjax = $smarty->fetch("ajax_projet.tpl");
   echo $dataAjax;
}
?>