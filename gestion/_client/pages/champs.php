<?php
$datasArticle=array();
$datasArticle["name"] = "champ";
$datasArticle["actionsPage"] = array("ajouter","move");
$datasArticle["fields_show"] = array("actif"=>"","titre"=>""); 
$datasArticle["orderby"] = "chrono ASC";

$datasArticle["filtre"][1]["type"] = "select";
$datasArticle["filtre"][1]["label"] = "Crypté";
$datasArticle["filtre"][1]["items"]= array("1"=>"Oui","0"=>"Non");
?>
<?php
include(DOS_PAGES_ADMIN . "modeles/init_article.php");
?>