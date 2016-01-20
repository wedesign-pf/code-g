<?php

/**************************************************
*
*   Requête concernant la Table Catégorie
*
*************************/

// Récupérer les catégories par rapport aux éléments donnée par la requête $tabElement
    $list_categorie_full=array();
    foreach($tabElement as $Kelem => $Velem){   
        $mySelect = new mySelect(__FILE__);
        $mySelect->tables=$thisSite->PREFIXE_TBL_CLI . "categories";
        $mySelect->fields="*";
        $mySelect->where="actif=:actif AND id=:id_categorie";
        $mySelect->whereValue["actif"]="1";
        $mySelect->whereValue["id_categorie"]=$Velem['id_categorie'];
        $list_categorie_full[]=$mySelect->query();
    }


    $list_categorie=array();
    foreach($list_categorie_full as $keyList => $cat){ 
        $cat = current($cat);
        $list_categorie['Categorie'][$cat['id']]=array(
            'id' => $cat["id"],
            'titre' => $cat["titre"],
            'list_champ'=> $cat["list_champ"],
            'list_type_utilisateur'=>$cat["list_type_utilisateur"]
        );
    }




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





    if(!$list_element):?>
        <div class="row">
            <div class="col-sm-12">
                <div class="alert alert-danger" role="alert" style="margin-top:10px;">
                  Il y a aucun élément pour cettte catégorie
                </div>

            </div>
        </div>     
        
       
<?php
     die();
    endif;



?>