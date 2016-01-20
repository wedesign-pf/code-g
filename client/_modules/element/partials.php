<?php
// Récupérer la liste des ids des champs
    $cat_list_champ = array();
    $list_id_champ = array();
    $cat_list_type = array();
    $list_type = array();



    foreach($list_element['Element'] as $KlistElem => $VlistElem){
        
        $cat_list_champ[$KlistElem] = array('id' => $VlistElem['Categorie']['list_champ']);
        $list_id_champ[$KlistElem]= explode(",",$cat_list_champ[$KlistElem]['id']);  
        
        $cat_list_type[$KlistElem] = array('id_type' => $VlistElem['Categorie']['list_type_utilisateur']);
        $list_type[$KlistElem]= explode(",",$cat_list_type[$KlistElem]['id_type']);    

    }


// Récupérer les éléments par rapport au type d'utilisateur
$UnsetElement = array();
if($_SESSION['auth']['id_type'] > 2 ){
    foreach($list_type as $kListType => $value){
        foreach($list_type[$kListType] as $Vvalue){
            if(!empty($Vvalue) && $Vvalue < $SessionIdType){
               $UnsetElement[] = $kListType;
            }
        }
    }

    foreach($UnsetElement as $kelement => $ValueE){
        unset($list_element['Element'][$ValueE]);
    }
}


// Récupérer les bonne valeurs des champs par rapport au projet
    $listChamp = array();
    foreach($list_id_champ as $kidc => $vv){
        foreach($list_id_champ[$kidc] as $idc){
            foreach($list_champ as $KlistChamp => $VlistChamp ){
                if($VlistChamp['id'] == $idc){
                    $listChamp[$kidc][] = array('id' => $VlistChamp['id'], 'titre' => $VlistChamp['titre'], 'filtre' => $VlistChamp['filtre']); 
                }
            }
        }    
    }

    

// Récupérer les valeurs qui correspond aux champs
    $listValeurs = array();
    foreach($list_element['Element'] as $klistE => $vlistE ){
        $mySelect = new mySelect(__FILE__);
        $mySelect->tables=$thisSite->PREFIXE_TBL_CLI . "elements_champs";
        $mySelect->fields="id,valeur";
        $mySelect->where="id_element=:id_element";
        $mySelect->whereValue["id_element"]=$vlistE['id'];
        $listValeur[]=$mySelect->query();
   
    }



    $listFiltre = array();
    foreach($listChamp as $KLC =>$ChampFiltre){
        foreach($listChamp[$KLC] as $KeyLC => $VLC){
            $listFiltre[$KLC] = $VLC['filtre'];
        }
    }


// Injecter dans listChamps le tableaux des valeurs
    $list_Champ_Valeur = array();
    foreach($listChamp as $Klistchamp => $Vlistchamp){
        $list_Champ_Valeur[$Klistchamp]['Champ'] = $Vlistchamp;
        $list_Champ_Valeur[$Klistchamp]['Valeur'] = $listValeur[$Klistchamp];
        
    }







// Décrypter les valeurs crypter
    $newChampValeurs = array();
    foreach($list_Champ_Valeur as $kLCV => $value){
        foreach($value['Champ'] as $kChamp => $vChamp){
           if(!empty($vChamp['filtre'])){
              $list_Champ_Valeur[$kLCV]['Valeur'][$kChamp]['valeur'] = decrypt_string("KEY", $value['Valeur'][$kChamp]['valeur']);
            };
        }
        
    }


// Htmlspechialchars
    foreach($list_Champ_Valeur[0]['Valeur'] as $key => $data){
        $list_Champ_Valeur[0]['Valeur'][$key]['valeur'] = htmlspecialchars($data['valeur'], ENT_QUOTES);   
    }



?>
