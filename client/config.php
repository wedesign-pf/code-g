<?php
// CUSTOMISATION /////////////////////////////////////////////////

$thisSite->LIST_LANG=array('fr'=>'Français'); 
$thisSite->TYPE_VIDEO_DEFAUT="Youtube"; // YouTube ou Vimeo

$thisSite->PREFIXE_TBL_CLI = $thisSite->PREFIXE_TBL . "code_";

if ($thisSite->SERVER == "local") { 
	
    $thisSite->DOMAINE= "http://" . $thisSite->LOCALHOST; // sans le slash à la fin 
	$thisSite->RACINE= $thisSite->DOMAINE . "/Fabrice/code-g/";
    
    $thisSite->SERVEUR_BDD=$thisSite->LOCALHOST; 
    $thisSite->NOM_BDD="code_g";

    $thisSite->MAIL_SENDMODE="mail";
    $thisSite->MAIL_SENDER="production@wedesign.pf";	
     
}
/*
if ($thisSite->SERVER == "prod") { 
 
    $thisSite->DOMAINE= "http://www.tahitiislandstravel.com"; // sans le slash à la fin 
	$thisSite->RACINE= $thisSite->DOMAINE . "/demo/";
    
    $thisSite->SERVEUR_BDD="localhost";
    $thisSite->NOM_BDD="c1tit";
    $thisSite->LOGIN_BDD="c1tit";
    $thisSite->MDP_BDD="k0PJiu#1hG";
    
    $thisSite->MAIL_HOST="localhost";
    $thisSite->MAIL_Username="";
    $thisSite->MAIL_Password="";
    $thisSite->SMTPAuth=false;
    $thisSite->MAIL_PORT="25";
    $thisSite->MAIL_SENDMODE="smtp";
    $thisSite->MAIL_SENDER="production@wedesign.pf";
    
}
*/

$thisSite->initLangueDefaut(); // pour être sur
//
$thisSite->mobile_detect=true; // chargement de la bibliothèque de détection des mobiles
$thisSite->printCSS=false; // chargement de la feuille de style pour l'impression
?>