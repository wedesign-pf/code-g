<?php
$datasArticle=array();
$datasArticle["name"] = "type_utilisateur";
$datasArticle["actionsPage"] = array("ajouter","move");
$datasArticle["fields_show"] = array("actif"=>"","titre"=>""); 
$datasArticle["orderby"] = "chrono ASC";
?>
<?php
include(DOS_PAGES_ADMIN . "modeles/init_article.php");
?>