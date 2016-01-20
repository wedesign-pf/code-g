<?php
$myTable=$thisSite->PREFIXE_TBL_CLI . "elements";
$orderby="id DESC";
$actionsPage=array("ajouter");

$listCols=array();
$listCols[]=array("field"=>"id","label"=>"#","align"=>"center","width"=>"5%");
$listCols[]=array("field"=>"actif","label"=>"Actif","align"=>"center","width"=>"5%","update"=>0);
if($__POST["F__projet"]=="" || $__POST["F__projet"]=="noneItem") {  $listCols[]=array("field"=>"id_projet","label"=>"Projet","align"=>"left","width"=>""); }
if($__POST["F__categorie"]=="" || $__POST["F__categorie"]=="noneItem") {  $listCols[]=array("field"=>"id_categorie","label"=>"Catégorie","align"=>"left","width"=>""); }
$listCols[]=array("field"=>"titre","label"=>"Titre","align"=>"left","width"=>"");

// récupération des projets
$obj_article = new article("projet");
$obj_article->fields="id,titre";
$obj_article->orderby="titre ASC";
$result=$obj_article->query(); 
$list_projet=array();
foreach($result as $datas){ 
    $list_projet[$datas["id"]]=$datas["titre"];
}

// récupération des catégories
$mySelect = new mySelect(__FILE__);
$mySelect->tables=$thisSite->PREFIXE_TBL_CLI . "categories";
$mySelect->fields="id,titre";
$mySelect->where="actif=:actif";
$mySelect->whereValue["actif"]="1";
$mySelect->orderby="titre ASC";
$result=$mySelect->query();
$list_categorie=array();
foreach($result as $row){ 
    $list_categorie[$row["id"]]=$row["titre"];
}
?>
<?php
include(DOS_INCPAGES_ADMIN  . "list-init.php");
?>
<?php
// SUPPRESSION /////////////////////////////////////// ????

if($__POST["actionInList"]=="delete") { // suppression

	foreach ($_POST as $k => $v) { 
		if(strpos($k,"deleteMe")===0) {	
			$idDel=substr($k,8);
			if ((int)$idDel) {
				$myDelete = new myDelete(__FILE__);
				$myDelete->table=$myTable;
				$myDelete->where="id=$idDel";
				$result=$myDelete->execute();
				$deleteDone=true;
                
                deleteMediasbyIdParent("utilisateurs",$idDel); //////
				deletePagebyArticle($myTable,$idDel);
			}
		}
	}
	$myAdmin->delete_notification($deleteDone,$result);
	$myAdmin->addLogs($myAdmin->pageCurrent,"DEL",$idDel,$result);
		
} // Fin suppression 
?>
<?php
// FILTRES /////////////////////////////////////// ????
include(DOS_INCPAGES_ADMIN  . "list-prepareFiltres.php");

$newfield = new select();
$newfield->field="F__projet";
$newfield->widthLabel=0;
$newfield->label="Projet";
$newfield->noneItem=true;
$newfield->items=$list_projet;
$newfield->value=$F__projet;
$newfield->javascript="onChange='submitFiltres()'";
$newfield->add();

$newfield = new select();
$newfield->field="F__categorie";
$newfield->widthLabel=0;
$newfield->label="Catégorie";
$newfield->noneItem=true;
$newfield->items=$list_categorie;
$newfield->value=$F__categorie;
$newfield->javascript="onChange='submitFiltres()'";
$newfield->add();
// FIN FILTRES //////////////////////////////////////////
?>   
<?php
// CHARGEMENT LISTE //////////////////////////////////////////
$formList = new formList();
$formList->tables=$myTable;
$formList->fields="*";
$formList->orderby=$orderby;
$formList->where="id!=0";
if($F__projet!="" && $F__projet!='noneItem') { $formList->where.=" AND id_projet='" . $F__projet . "'"; }
if($F__categorie!="" && $F__categorie!='noneItem') { $formList->where.=" AND id_categorie='" . $F__categorie . "'"; }
$formList->clause_where();
$count_datas = $formList->get_datas();

if(count($formList->datasList)>0) {

	include(DOS_INCPAGES_ADMIN  . "list-beforeLoop.php");

	$listRow=array();
	foreach($formList->datasList as $keyId=>$datas){ 
		$valeurs=array();
		include(DOS_INCPAGES_ADMIN  . "list-inLoop.php");

		// chargement d'autres données /////////////////////////////////////// ????

        $valeurs["id_projet"]=$list_projet[$valeurs["id_projet"]];
        $valeurs["id_categorie"]=$list_categorie[$valeurs["id_categorie"]];

		// fin chargement données manuellement
		
		$listRow[$keyId]=$valeurs;
	
	} // fin lecture dataList
	
} //count($formList->datasList)
// FIN CHARGEMENT LISTE //////////////////////////////////////////
?>
<?php
include(DOS_INCPAGES_ADMIN  . "list-prepare.php");
?>