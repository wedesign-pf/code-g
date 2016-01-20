<?php
$myTable=$thisSite->PREFIXE_TBL_CLI . "elements";

$actionsPage=array("annuler","valider","appliquer");
$variablesAuthorized=true;

// récupération des projets
$obj_article = new article("projet");
$obj_article->fields="id,titre";
$obj_article->orderby="titre ASC";
$result=$obj_article->query(); 
$list_projet=array();
foreach($result as $datas){ 
    $list_projet[$datas["id"]]=$datas["titre"];
}

// récupération des catégories
$mySelect = new mySelect(__FILE__);
$mySelect->tables=$thisSite->PREFIXE_TBL_CLI . "categories";
$mySelect->fields="id,titre";
$mySelect->where="actif=:actif";
$mySelect->whereValue["actif"]="1";
$mySelect->orderby="titre ASC";
$result=$mySelect->query();

$list_categorie=array();
foreach($result as $row){ 
    $list_categorie[$row["id"]]=$row["titre"];
}

// Récupération des champs
$obj_article = new article("champ");
$obj_article->fields="id,titre,filtre1";
$result=$obj_article->query(); 
$list_champ=array();
$list_champ_crypte=array();
foreach($result as $datas){ 
    $list_champ[$datas["id"]]=$datas["titre"];
    if($datas["filtre1"]=="1") { $list_champ_crypte[]=$datas["id"]; }
}

?>
<?php
include(DOS_INCPAGES_ADMIN  . "maj-init.php");
?>
<?php
////////////////////////////////////////////////////////////////
// GESTION DONNEES
$formMaj = new formMaj();
$formMaj->tables=$myTable;
$formMaj->fields="*";
$formMaj->where="id=:id";
$formMaj->whereValue["id"]=array($idCurrent,PDO::PARAM_INT);
$formMaj->multiLang=false;
$formMaj->clause_where();

// Validation du formulaire
if($__POST["actionForm"]!="" &&  $__POST["actionForm"]!="Annuler") {
      
    //echoa($__POST);
    if($__POST["titre"]=="") { $__POST["titre"]=$list_categorie[$__POST["id_categorie"]]; }

	$idSet =$formMaj->set_datas();
    
    //echoa($idSet);
    
    // MAJ des elements champs /////////////////
    
    // on sauvegarde les valeurs d'origine (pour la MAJ de l'historique)
    $mySelect = new mySelect(__FILE__);
    $mySelect->tables=$thisSite->PREFIXE_TBL_CLI . "elements_champs";
    $mySelect->fields="id,valeur";
    $mySelect->where="id_element=:id_element";
    $mySelect->whereValue["id_element"]=$idSet;
    $resultE=$mySelect->query();

    $list_valeurOrigine=array();
    foreach($resultE as $rowE){ 
    
        $list_valeurOrigine[$rowE["id"]]=$rowE["valeur"];
        
        // si le champ n'existe plus dans le formualire (changement de catégorie), on l'ajoute dans l'historique pour conserver la valeur d'origine
        if(!isset($__POST["champ".$rowE["id"]])) {
            
            $myInsert = new myInsert(__FILE__);
            $myInsert->table=$thisSite->PREFIXE_TBL_CLI . "elements_histo_modif";
            $myInsert->field["id_utilisateur"]="admin-" . $myAdmin->LOGIN;
            $myInsert->field["datetime"]=date('Y-m-d H:i:s');
            $myInsert->field["id_element"]=$idSet;
            $myInsert->field["id_champ"]=$rowE["id"];
            $myInsert->field["valeur_avant"]=$rowE["valeur"];
            $myInsert->field["valeur_apres"]="[existe plus]";
            $result=$myInsert->execute();

        }
    }

    // on supprime tout avant de tout recréer, c'est plus propre et plus facile ainsi.
    $myDelete = new myDelete(__FILE__);
    $myDelete->table=$thisSite->PREFIXE_TBL_CLI . "elements_champs";
    $myDelete->where="id_element=:id_element";
    $myDelete->whereValue["id_element"]=array($idSet,PDO::PARAM_INT);
    $result=$myDelete->execute();
    
    if($myDelete){
        
    }

    // on boucle sur les éléments du formulaire envoyé
    foreach ($__POST as $k => $valeur) { 
        // si le nom du champ de saisie commence par "champ", c'est que c'est un champ élément
        if(strpos($k,"champ")===0) {	
			$idChamp=substr($k,5); // on récupère l'id du champ
            if(in_array($idChamp,$list_champ_crypte)) { $valeur = crypt_string("KEY", $valeur);  } // on crypte si nécessaire
         
            $myInsert = new myInsert(__FILE__);
            $myInsert->table=$thisSite->PREFIXE_TBL_CLI . "elements_champs";
            $myInsert->field["id_element"]=$idSet;
            $myInsert->field["id"]=$idChamp;
            $myInsert->field["valeur"]=$valeur;
            $result=$myInsert->execute();
            
            // ajout à l'historique, si valeur différente de la valeur d'origine
            if($majInsert!=1) {
                if($valeur!=$list_valeurOrigine[$idChamp]) {
                    $myInsert = new myInsert(__FILE__);
                    $myInsert->table=$thisSite->PREFIXE_TBL_CLI . "elements_histo_modif";
                    $myInsert->field["id_utilisateur"]="admin-" . $myAdmin->LOGIN;
                    $myInsert->field["datetime"]=date('Y-m-d H:i:s');
                    $myInsert->field["id_element"]=$idSet;
                    $myInsert->field["id_champ"]=$idChamp;
                    $myInsert->field["valeur_avant"]="".$list_valeurOrigine[$idChamp];
                    $myInsert->field["valeur_apres"]=$valeur;
                    $result=$myInsert->execute();
                }
            }
        }
    }
    /////////////////////////////////////
    
	actionFormMaj($__POST["actionForm"]);
}

// chargement des données
$formMaj->get_datas();
//echoa($formMaj->datasForm);
?>
<?php
///////////////////////////////
// PREPARATION DES DONNEES
?>
<?php
///////////////////////////////////
// champs de saisie
///////////////////////////////////
if($majInsert==1) {
    
	$newfield = new hidden();
	$newfield->field="creation_date";
	$newfield->value=date('Y-m-d H:i:s');
	$newfield->add();
    
    $newfield = new hidden();
	$newfield->field="creation_utilisateur";
	$newfield->value="admin-" . $myAdmin->LOGIN;
	$newfield->add();
}

$newfield = new radio();
$newfield->field="actif";
$newfield->defaultValue=1;
$newfield->multiLang=false;
$newfield->label=$datas_lang["actif"];
$newfield->items=$datas_lang["listeActif"];
$newfield->add();

$newfield = new input();
$newfield->field="titre";
$newfield->multiLang=false;
$newfield->label="Titre";
$newfield->variablesAuthorized=true;
$newfield->add();
//$newfield->rule("required",true);

$newfield = new textarea();
$newfield->field="remarques";
$newfield->label="Remarques";
$newfield->multiLang=false;
$newfield->rows=5;
$newfield->add();

$list_projet=array(""=>"Choisissez...")+$list_projet; 
//echoa($list_projet);
$newfield = new select();
$newfield->field="id_projet";
$newfield->label="Projet";
$newfield->items=$list_projet;
$newfield->add();
$newfield->rule("required",true);

$list_categorie=array(""=>"Choisissez...")+$list_categorie; 
//echoa($list_categorie);
$newfield = new select();
$newfield->field="id_categorie";
$newfield->label="Catégorie";
$newfield->items=$list_categorie;
$newfield->javascript="onChange='call_changeCategorie()'";
$newfield->add();
$newfield->rule("required",true);

?>
<?php
include(DOS_INCPAGES_ADMIN  . "maj-prepare.php");
?>