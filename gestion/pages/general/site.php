<?php
$myTable=$thisSite->PREFIXE_TBL_GEN . "site";
$idCurrent=$thisSite->ID_SITE;
$actionsPage=array("appliquer");
?>
<?php
include(DOS_INCPAGES_ADMIN  . "maj-init.php");
?>
<?php
////////////////////////////////////////////////////////////////
// formulaire
$formMaj = new formMaj();
$formMaj->tables=$myTable;
$formMaj->fields="*";
$formMaj->where="id=:id";
$formMaj->whereValue["id"]=array($idCurrent,PDO::PARAM_INT);
$formMaj->multiLang=true;
$formMaj->clause_where();


// si validation du formulaire
if($__POST["actionForm"]!="") {
	$formMaj->set_datas();
}

// chargement des données
$formMaj->get_datas();
?>
<?php
///////////////////////////////
$listSkins=array();
$chem.= "../" . $thisSite->DOS_CLIENT_SKIN;

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
$newfield->field="titre";
$newfield->multiLang=true;
$newfield->label=$datas_lang["titre"];
$newfield->add();
$newfield->rule("required",true);

$newfield = new input();
$newfield->field="suffixe_title";
$newfield->multiLang=true;
$newfield->label="Suffixe Titre des pages";
$newfield->add();

$newfield = new file();
$newfield->field="social_image";
$newfield->label=$datas_lang["socialImage"];
$newfield->multiLang=false;
$newfield->startFolder="";
$newfield->upload=true;
$newfield->disabled=false;
$newfield->browse=true;
$newfield->extensionsAuthorized="images";
$newfield->variablesAuthorized=true; 
$newfield->tooltip=$datas_lang["tooltip_socialImage"];
$newfield->add();

$newfield = new radio();
$newfield->field="skin";
$newfield->label=$datas_lang["skinCurrent"];
$newfield->items=$listSkins;
$newfield->add();

$newfield = new select();
$newfield->field="etat";
$newfield->label=$datas_lang["etatSite"];
$newfield->items=$datas_lang["listeEtatSite"];
$newfield->add();
$newfield->rule("required",true);

$newfield = new select();
$newfield->field="error_log";
$newfield->label=$datas_lang["gestionErreurs"];
$newfield->items=$datas_lang["listeGestionErreurs"];
$newfield->add();

$newfield = new textarea();
$newfield->field="google_analytics";
$newfield->multiLang=false;
$newfield->rows=10;
$newfield->label="Code";
$newfield->tooltip="Uniquement le code entre les balises < script >";
$newfield->add();

$newfield = new input();
$newfield->field="facebook_url";
$newfield->multiLang=false;
$newfield->label="Url";
$newfield->add();

$newfield = new input();
$newfield->field="facebook_app_id";
$newfield->multiLang=false;
$newfield->label="App ID";
$newfield->add();

$newfield = new input();
$newfield->field="facebook_app_secret";
$newfield->multiLang=false;
$newfield->label="App Secret";
$newfield->add();

$newfield = new input();
$newfield->field="mailchimp_list_id";
$newfield->multiLang=false;
$newfield->label="List ID";
$newfield->add();

$newfield = new input();
$newfield->field="mailchimp_api_secret";
$newfield->multiLang=false;
$newfield->label="API Secret";
$newfield->add();

$newfield = new radio();
$newfield->field="cookies_accept";
$newfield->defaultValue=1;
$newfield->multiLang=false;
$newfield->label="Message Acceptation Cookies";
$newfield->tooltip="Utilisé uniquement pour les sites en langue française";
$newfield->items=$datas_lang["listeActif"];
$newfield->add();

$newfield = new textarea();
$newfield->field="rich_snippet";
$newfield->multiLang=true;
$newfield->rows=25;
$newfield->label="Rich Snippet";
$newfield->add();
?>
<?php
include(DOS_INCPAGES_ADMIN  . "maj-prepare.php");
?>