<?php
addStructure("PAGE_head","<link href='https://www.google.com/fonts#UsePlace:use/Collection:Open+Sans:400,700,400italic,700italic' rel='stylesheet' type='text/css'>");
?>
<?php
/////////////////////// INITIALISATION des MODULES de BASE //////////////////////////////////////////////

if ($thisSite->SERVER != "local") {
    $obj_module = new module("_boutons_partage");
	$obj_module->doc_ready="$(\".shareIcons\").jsSocials({showLabel: false, showCount: false , shares: [\"facebook\", \"twitter\", \"googleplus\", \"linkedin\"]});"; 
    $obj_module->load(); 
}

$obj_module = new module("_favicon");
$obj_module->load();

$obj_module = new module("_header");
$obj_module->load();

$obj_module = new module("_footer");
$obj_module->load(); 

/////////////////////// INITIALISATION  CSS + JS //////////////////////////////////////////////
$obj_outil = new outil("lib");
$obj_outil->css=array("css/bootstrap.min.css",  "css/metisMenu.css", "css/morris.css", "css/sb-admin-2.css");
$obj_outil->js=array("js/bootstrap.min.js", "js/jquery.flexisel.js", "js/metisMenu.js", "js/morris.js");
$obj_outil->load();


?>