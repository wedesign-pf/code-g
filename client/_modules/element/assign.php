<?php

    $smarty->assign('user_titre',$userTitre);
    $smarty->assign('SessionIdType',$SessionIdType);
    $smarty->assign('list_element', $list_element);
    $smarty->assign('list_Champ_Valeur', $list_Champ_Valeur);
    if(($var_field_id == "id_projet") || ($id == null)){
        
        $titreOnglet = "projet";
        
        $smarty->assign('titreOnglet', $titreOnglet);
        $smarty->assign('projet', $projet);
        $smarty->assign('idOnglet', $id);
        
    }
    if($var_field_id == "id_categorie"){
        $smarty->assign('projets', $projets);
        $smarty->assign('categorie_titre', $list_categorie['Categorie'][$id]['titre']); 
    }








?>