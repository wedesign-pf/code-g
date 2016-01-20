<?php
$datasArticle=array();
$datasArticle["name"] = "projet";
$datasArticle["actionsPage"] = array("ajouter");
$datasArticle["fields_show"] = array("actif"=>"","titre"=>""); 
$datasArticle["orderby"] = "titre ASC";
?>
<?php
include(DOS_PAGES_ADMIN . "modeles/init_article.php");
?>