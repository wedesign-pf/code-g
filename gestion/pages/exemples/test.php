<?php
$myTable="__exemple_form";
$actionsPage=array("appliquer");
$idCurrent=$thisSite->ID_SITE;
$actionsPage=array("appliquer");
$variablesAuthorized=true;
?>
<?php
include(DOS_INCPAGES_ADMIN  . "maj-init.php");
?>
<?php
//echoa($__POST);
////////////////////////////////////////////////////////////////
// formulaire
$formMaj = new formMaj();
$formMaj->tables=$myTable;
$formMaj->fields="*";
$formMaj->where="id=:id";
$formMaj->whereValue["id"]=array($idCurrent,PDO::PARAM_INT);
$formMaj->multiLang=true;
$formMaj->clause_where();

//echoa($__POST);
// si validation du formulaire
if($__POST["actionForm"]!="") {
	//$formMaj->fieldUpdate["nb_aff"]="LITERAL:nb_aff+1";
	//$formMaj->fieldInsert["todolist"]=date("His");
	$formMaj->set_datas();
}

// chargement des données
$formMaj->get_datas();
?>
<?php

///////////////////////////////
$listSkins=array();
$chem.= DOS_BASE_ADMIN . "css/";

$handle  = @opendir($chem);
while ($file = @readdir($handle)) {
	if(is_dir("$chem/$file") && $file!="." && $file!=".."  ) {
		$listSkins[$file]=$file;
		if($formMaj->datasForm[$myAdmin->LANG_DATAS]["skin"] == ""){ $formMaj->datasForm[$myAdmin->LANG_DATAS]["skin"]=$file; } // valeur par défaut
	}
}
$datas_page["listSkins"]=$listSkins;
?>
<?php
///////////////////////////////////
// champs de saisie
///////////////////////////////////

$newfield = new input();
$newfield->field="Finput";
$newfield->multiLang=false;
$newfield->label=$datas_lang["titre"];
$newfield->variablesAuthorized=true;
$newfield->add();
?>
<?php
include(DOS_INCPAGES_ADMIN  . "maj-prepare.php");
?>