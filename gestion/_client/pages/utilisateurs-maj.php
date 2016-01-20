<?php
$myTable=$thisSite->PREFIXE_TBL_CLI . "utilisateurs";
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
//echoa($__POST);

    if($__POST["mdp"]!="") { 
        $__POST["mdp"]=md5($__POST["mdp"]);
    } else {
        unset($__POST["mdp"]);
    }

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
$newfield->label="Nom, prénom";
$newfield->variablesAuthorized=true;
$newfield->add();
$newfield->rule("required",true);

$newfield = new input();
$newfield->field="email";
$newfield->multiLang=false;
$newfield->label=$datas_lang["email"];
$newfield->variablesAuthorized=true;
$newfield->add();
$newfield->rule("required",true);
$newfield->rule("email",true);

$newfield = new password();
$newfield->field="mdp";
$newfield->multiLang=false;
$newfield->label=$datas_lang["motdepasse"];
$newfield->value="";
$newfield->add();
if($majInsert==1) { $newfield->rule("required",true); }
$newfield->rule("alphanumeric",true);
$newfield->rule("minlength",5);
$newfield->rule("maxlength",20);

$newfield = new password();
$newfield->field="confirm_mdp";
$newfield->label=$datas_lang["modepasseconfirmation"];
$newfield->add();
$newfield->rule("equalTo","'#mdp'");

// récupération des types utilisateurs
$obj_article = new article("type_utilisateur");
$obj_article->fields="id,titre";
$result=$obj_article->query(); 
$list_type_utilisateur=array();
foreach($result as $datas){ 
    $list_type_utilisateur[$datas["id"]]=$datas["titre"];
}

$newfield = new select();
$newfield->field="id_type";
$newfield->multiLang=false;
$newfield->defaultValue="";
$newfield->label="Type";
$newfield->items=$list_type_utilisateur;
$newfield->add();
?>
<?php
include(DOS_INCPAGES_ADMIN  . "maj-prepare.php");
?>