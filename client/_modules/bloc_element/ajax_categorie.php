<?php
    session_start();
    include_once("../../../init.php"); 
    accessAuth();

// Récupérer le nom de l'utilisateur
    $userTitre = $_SESSION['auth']['titre'];
    $SessionIdType = $_SESSION['auth']['id_type'];

if(isset($__GET['id'])){
    
// Traitement du paramètre passer en GET
    
    // Doit etre uniquement un entier
    $id = intval($__GET['id']);
    $var_field_id = "id_categorie";

// Récupérer les éléments par rapport à l'id catégorie passé en GET
    include("../element/elements.php");


    
// Récupérer une valeur du projet par rapport à son titre dans l'ordre croissant
    $listprojets=array();
    foreach($tabElement as $Kelem => $Velem){   
        $obj_article = new article("projet");
        $obj_article->fields="id,titre";
        $obj_article->where="actif=1 AND id=".$Velem['id_projet'];
        $listprojets[$Kelem]=$obj_article->query();
    }

    //echoa($listprojets);
    
    $projets = array();
    foreach($listprojets as $kListProjet => $vListProjet){
        foreach($listprojets[$kListProjet] as $Kprojet =>$Vprojet){
            $projets[] = array('titre' => $Vprojet['titre']);
        }
    }
    
// Récupérer les catégories par rapport aux éléments donnée par la requête $tabElement
    include("../element/categories.php");
    
if(!empty($list_element)){
    
// Récupérer les champs
    include("../element/champs.php");

// Inclure le fichier des portions de codes suivants  
    include("../element/partials.php");
    
    

    
    $smarty->assign('user_titre',$userTitre);
    $smarty->assign('SessionIdType',$SessionIdType);
    $smarty->assign('projets', $projets);
    $smarty->assign('categorie_titre', $list_categorie['Categorie'][$id]['titre']);
    $smarty->assign('list_element', $list_element);
    $smarty->assign('list_Champ_Valeur', $list_Champ_Valeur);

    $dataAjax = $smarty->fetch("ajax_categorie.tpl");
    echo $dataAjax;
    
}else{
    
        $messEmptyElement = "Il y a aucun élément pour cette catégorie";
    
        $smarty->assign('messEmptyElement', $messEmptyElement);
        $dataAjax = $smarty->fetch("ajax_categorie.tpl");
        echo $dataAjax;
    
    }
}
?>