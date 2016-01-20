<?php
$datasMedia=array();

$datasMedia["name"] = "crf"; // nom de l'article (�galement nom du dossier pour les fichiers)
$datasMedia["type"]="image"; // image ou video, file ou link
$datasMedia["maxElements"]=0; // nombre �l�ments maximum, 0= illimit�
$datasMedia["dimThumbs"]=array("100x100","500x0");
$datasMedia["dimMax"] = "1024x0";
$datasMedia["multiLangType"]=false;
$datasMedia["multiLangDestination"]=false;
$datasMedia["actionDestination"]="link";  // "file" ou "link" ou rien : Destination d'un click (uniquement si type=image)
$datasMedia["extensionsAuthorized"]="jpg,png,zip"; //  si vide: auto les ext. par d�faut sinon indiquer "images" ou une chaine > exemple: "jpg,png,zip"

$datasMedia["actif"] = array("label"=>"Actif","update"=>0); 
$datasMedia["choix1"] = array("label"=>"<i class='fa fa-star'></i>","update"=>1); 
?>
<?php
include(DOS_PAGES_ADMIN . "modeles/media.php");
?>