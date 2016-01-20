
<?php
/////////////////////// INITIALISATION des MODULES de BASE //////////////////////////////////////////////

if ($thisSite->SERVER != "local") {
    $obj_module = new module("_boutons_partage");
	$obj_module->doc_ready="$(\".shareIcons\").jsSocials({showLabel: false, showCount: false , shares: [\"facebook\", \"twitter\", \"googleplus\", \"linkedin\"]});"; 
    $obj_module->load(); 
}

$obj_module = new module("_favicon");
$obj_module->load();

$obj_module = new module("_boutons_rs");
$obj_module->load();


/* Afficher le header (navigation bar) uniquement lorsque un utilisateur est connecté*/
if(isset($_SESSION['auth'])){
	$obj_module = new module("_header");
	$obj_module->load();
}

$obj_module = new module("_footer");
$obj_module->load(); 

$obj_outil = new outil("lib");
$obj_outil->css=array("css/bootstrap.min.css","css/metisMenu.css", "css/morris.css", "css/sb-admin-2.css", "css/dataTables.responsive.css", "css/dataTables.bootstrap.css");
$obj_outil->js=array("js/bootstrap.min.js", "js/dataTables.bootstrap.min.js", "js/jquery.dataTables.min.js", "js/metisMenu.js", "js/morris.js", "sb-admin-2.js", "js/app.js", "js/clipboard.min.js","js/app.js");
$obj_outil->load();

?>
