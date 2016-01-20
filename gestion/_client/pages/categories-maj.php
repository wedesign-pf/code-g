<?php
$myTable=$thisSite->PREFIXE_TBL_CLI . "categories";
$actionsPage=array("annuler","valider","appliquer");
$variablesAuthorized=true;
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
    
   // echoa($__POST);
    
	$idSet =$formMaj->set_datas();
	actionFormMaj($__POST["actionForm"]);
}

// chargement des données
$formMaj->get_datas();
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
	$newfield->field="datetime";
	$newfield->value=date('Y-m-d H:i:s');
	$newfield->add();

}

$newfield = new hidden();
$newfield->field="actif";
$newfield->multiLang=false;
$newfield->defaultValue="1";
$newfield->add();

$newfield = new input();
$newfield->field="titre";
$newfield->multiLang=false;
$newfield->label=$datas_lang["titre"];
$newfield->variablesAuthorized=true;
$newfield->add();
$newfield->rule("required",true);

// récupération des champs
$obj_article = new article("champ");
$obj_article->fields="id,titre";
$result=$obj_article->query(); 
$list_champ=array();
foreach($result as $datas){ 
    $list_champ[$datas["id"]]=$datas["titre"];
}

$newfield = new selectM();
$newfield->field="list_champ";
$newfield->multiLang=false;
$newfield->defaultValue="";
$newfield->label="Champs";
$newfield->items=$list_champ;
$newfield->selectAll=false;
$newfield->add();

// récupération des types utilisateurs
$obj_article = new article("type_utilisateur");
$obj_article->fields="id,titre";
$result=$obj_article->query(); 
$list_type_utilisateur=array();
foreach($result as $datas){ 
    $list_type_utilisateur[$datas["id"]]=$datas["titre"];
}

$newfield = new checkbox();
$newfield->field="list_type_utilisateur";
$newfield->multiLang=false;
$newfield->defaultValue="";
$newfield->label="Types Utilisateur";
$newfield->items=$list_type_utilisateur;
$newfield->selectAll=false;
$newfield->add();

?>
<?php
include(DOS_INCPAGES_ADMIN  . "maj-prepare.php");
?>