<?php    

    session_start();
    include_once("../../../init.php"); 
    accessAuth();

// Traitement de l'id passer en GET
if(isset($__GET['idp']) && isset($__GET['ide'])){


// Récupérer le nom de l'utilisateur
    $userTitre = $_SESSION['auth']['titre'];
    $SessionIdType = $_SESSION['auth']['id_type'];
    
    
    
// Doit etre uniquement en entier
    $id_projet = intval($__GET['idp']);
    $id_element = intval($__GET['ide']);
    

// Récupérer le projet par rapport l'id passer en GET
    $obj_article = new article("projet");
    $obj_article->fields="id,titre";
    $obj_article->where="id=".$id_projet;
    $obj_article->orderby="titre ASC";
    $req=$obj_article->query();
    $projet=array();
    foreach($req as $k => $data){ 
        $projet[$k]=array('id' => $data["id"], 'titre' => $data['titre']);
    }


// Vérifier si l'id du projet existe
    verifTab($projet, "Vous avez été redirigé vers la page d'accueil car le projet demandé n'existe pas");



    
// Récupérer les éléments par rapport au projet
    $mySelect = new mySelect(__FILE__);
    $mySelect->tables=$thisSite->PREFIXE_TBL_CLI . "elements";
    $mySelect->fields="*";
    $mySelect->where="actif=:actif AND id=:id_element AND id_projet=:id_projet" ;
    $mySelect->whereValue["actif"]="1";
    $mySelect->whereValue["id_element"]=$id_element;
    $mySelect->whereValue["id_projet"]=$projet[0]['id'];
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


// Récupérer toutes la liste des catégories, servira pour la liste de selection
    $mySelect = new mySelect(__FILE__);
    $mySelect->tables=$thisSite->PREFIXE_TBL_CLI . "categories";
    $mySelect->fields="*";
    $mySelect->where="actif=:actif";
    $mySelect->whereValue["actif"]="1";
    $list_categorie_select=$mySelect->query();    
    
    //echoa($list_categorie_select);

// Récupérer la catégories par rapport à l'élément
    $tabE_list_categorie=array();
    foreach($tabElement as $Kelem => $Velem){   
        $mySelect = new mySelect(__FILE__);
        $mySelect->tables=$thisSite->PREFIXE_TBL_CLI . "categories";
        $mySelect->fields="*";
        $mySelect->where="actif=:actif AND id=:id_categorie";
        $mySelect->whereValue["actif"]="1";
        $mySelect->whereValue["id_categorie"]=$Velem['id_categorie'];
        $tabE_list_categorie[]=$mySelect->query();
    }
    $current_list_categorie = array();
    $current_categorie = current($tabE_list_categorie);
    $current_id_categorie = $current_categorie[0]['id'];


// Retirer dans le tableau des catégorie select les valeurs qui a pour le current catégorie
    foreach($list_categorie_select as $k => $data){
        if($data['id'] == $current_id_categorie){
            unset($list_categorie_select[$k]);
        }
    }
    
    
    //echoa($list_categorie_select);

    $list_categorie=array();
    foreach($tabE_list_categorie as $keyList => $cat){ 
        $cat = current($cat);
        $list_categorie['Categorie'][$cat['id']]=array(
            'id' => $cat["id"],
            'titre' => $cat["titre"],
            'list_champ'=> $cat["list_champ"],
            'list_type_utilisateur'=>$cat["list_type_utilisateur"]
        );
    }

    //echoa($list_categorie);


// Injecter $list_categorie dans $tabElement pour avoir un seul tableau propre
    foreach($tabElement as $k => $value){    
        //$id_categories[$k] = $value[id_categorie];
        $list_element['Element'][$k] = array(
            'id'=> $value[id],
            'titre'=> $value[titre],
            'creation_date' => $value[creation_date],
            'actif' =>$value[actif],
            'creation_utilisateur' =>$value[creation_utilisateur],
            'remarques' =>$value[remarques], 
            'id_projet' =>$value[id_projet], 
            'Categorie' =>$list_categorie['Categorie'][$value['id_categorie']]
        );
    }

    
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
    
// Vérifier si les éléments existent pour le projet demandé
    verifTab($list_element, "Vous avez été redirigé vers la page d'accueil car le projet ne contient aucun élément");


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
    $listValeur = array();
    foreach($list_element['Element'] as $klistE => $vlistE ){
        $mySelect = new mySelect(__FILE__);
        $mySelect->tables=$thisSite->PREFIXE_TBL_CLI . "elements_champs";
        $mySelect->fields="valeur";
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


// Décrypter les champs cryptés
    foreach($list_Champ_Valeur as $kLCV => $value){
        foreach($value['Champ'] as $kChamp => $vChamp){
           if(!empty($vChamp['filtre'])){
              $list_Champ_Valeur[$kLCV]['Valeur'][$kChamp]['valeur'] = decrypt_string("KEY", $value['Valeur'][$kChamp]['valeur']); 
            };
        }
        
    }


    $smarty->assign('user_titre',$userTitre);
    $smarty->assign('SessionIdType',$SessionIdType);
    $smarty->assign('projet', $projet);
    $smarty->assign('list_categorie_select', $list_categorie_select);
    $smarty->assign('list_element', $list_element);
    $smarty->assign('list_Champ_Valeur', $list_Champ_Valeur);
    
    $dataAjax = $smarty->fetch("ajax_projet.tpl");
    echo $dataAjax;
    
}
?>