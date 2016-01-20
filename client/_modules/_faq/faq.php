<?php
$obj_article = new article("faq");
$obj_article->orderby="chrono DESC";
$result=$obj_article->query();
$faq=array();
foreach($result as $row){
   $faq[]=array("question"=>$row["titre"],"reponse"=>$row["texte1"]);
}

$smarty->assign("faq", $faq);
?>