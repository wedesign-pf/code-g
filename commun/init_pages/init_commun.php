<?php
if(@$come_by_index!=1) { echo("passer par devant. merci.");	exit; } // sécurité si appel du script PHP sans passer par l'index

if(file_exists($path_to_racine . $thisSite->DOS_BASE . "lang/" . $thisSite->current_lang .".php")) {
    include($path_to_racine . $thisSite->DOS_BASE . "lang/" . $thisSite->current_lang .".php");
}
if(file_exists($path_to_racine . $thisSite->DOS_CLIENT . "lang/" . $thisSite->current_lang .".php")) {
    include($path_to_racine . $thisSite->DOS_CLIENT . "lang/" . $thisSite->current_lang .".php");
}

$datas_lang=array_merge($thisSite->intitulesLang,$datas_lang);
$smarty->assign("datas_lang",$datas_lang);

// GESTION STATUT DU SITE
if(!isset($_SESSION["login_OK"]) 
	|| !isset($_SESSION["is_logged_OK"]) 
	|| $_SESSION["is_logged_OK"] != "oui" 
	|| $_SESSION["nom_OK"] == "" 
	|| $_SESSION["id_OK"] == "" 
	|| $_SESSION["privilege_OK"] == "")	{
	
	if($thisSite->statut=="C") { include_once(get_path_pages("site_en_construction.php")); exit; }
	if($thisSite->statut=="D") { include_once(get_path_pages("site_en_demonstration.php")); exit; }	
}

// META TAGS
$thisSite->metaTags=array();
$thisSite->metaTags["title"] =$thisSite->getDatasPage("","","","page_tag_title") . $thisSite->suffixeTitle;
$thisSite->metaTags["keywords"] =$thisSite->getDatasPage("","","","page_tag_keywords");
$thisSite->metaTags["description"] =$thisSite->getDatasPage("","","","page_tag_description");
$thisSite->metaTags["robots"] =$thisSite->getDatasPage("","","","page_tag_robots");

// pour les reseaux sociaux
$thisSite->socialTags=array();
$thisSite->socialTags["titre"] = urlencode($thisSite->metaTags["title"]);
$thisSite->socialTags["image"] = $thisSite->RACINE . $thisSite->socialImage;
$thisSite->socialTags["texte"] = urlencode($thisSite->metaTags["description"]);
$thisSite->socialTags["lien"] = $thisSite->DOMAINE . $_SERVER["REQUEST_URI"];

?>