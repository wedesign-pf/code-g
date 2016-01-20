<?php
$fieldMedia = new mediaImage();
$fieldMedia->field=$datasArticle["name"]."_image";
$fieldMedia->label=$datas_lang["image"];
$fieldMedia->startFolder=$datasArticle["name"]; 
$fieldMedia->multiLangType=false; 
$fieldMedia->multiLangDestination=false; 
$fieldMedia->dimMax=$datasArticle["image_dimMax"]; 
$fieldMedia->dimThumbs=$thisSite->DEFAULT_DIM_VIGS;
$fieldMedia->fileRequired=false;
$fieldMedia->legendeEnabled=$datasArticle["image_legendeEnabled"];
if($datasArticle["image_maxElements"]>0) { $fieldMedia->maxElements=$datasArticle["image_maxElements"]; }
$fieldMedia->add();
$mainSelect=0;
?>
<?php
include(DOS_INCPAGES_ADMIN  . "medias-init.php");
include(DOS_INCPAGES_ADMIN  . "medias-maj-prepare.php");
include(DOS_INCPAGES_ADMIN  . "medias-list-prepare.php");
?>