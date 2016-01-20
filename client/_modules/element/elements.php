<?php
/**************************************************
*
*   Requête concernant la Table Eléments
*
*************************/
    


    

// Récupérer les éléments par rapport aux variables "$var_field_id" et "$id"
    $tabElement = array();
    $mySelect = new mySelect(__FILE__);
    $mySelect->tables=$thisSite->PREFIXE_TBL_CLI . "elements";
    $mySelect->fields="*";
    if(!empty($action)){ 
        $mySelect->where="actif=:actif AND id=:id_element AND $var_field_id=:$var_field_id" ;
        $mySelect->whereValue["id_element"]=$id_element;
        $mySelect->whereValue["id_projet"]=$currentProjet['id'];
        $mySelect->whereValue["actif"]="1";
    }else{
        if(!$action){
            $mySelect->where="actif=:actif AND $var_field_id=:$var_field_id";  
            $mySelect->whereValue["actif"]="1";
            $mySelect->whereValue["$var_field_id"]=$id;
        }
    }

    $mySelect->orderby="titre ASC";
    $tabElement=$mySelect->query();




    foreach($tabElement as $KElement => $Element){
        // Récupérer le prefix de id_utilisateur "admin-"
         $prefix_utilisateur[$KElement] = substr($Element["creation_utilisateur"],0,6);
         if($prefix_utilisateur[$KElement] == "admin-"){
            // garder les valeurs apres "admin-"
            $nom_utilisateur[$KElement] = substr($Element["creation_utilisateur"],6);
            $tabElement[$KElement]["creation_utilisateur"] = ucfirst($nom_utilisateur[$KElement]);     
         }
    }




    


?>