<?php
$myTable=$thisSite->PREFIXE_TBL_CLI . "utilisateurs";
$orderby="titre ASC";
$actionsPage=array("ajouter");
$listCols=array();
$listCols[]=array("field"=>"id","label"=>"#","align"=>"center","width"=>"5%");
$listCols[]=array("field"=>"actif","label"=>"Actif","align"=>"center","width"=>"5%","update"=>0);
$listCols[]=array("field"=>"titre","label"=>"Nom, prénom","align"=>"left","width"=>"");
$listCols[]=array("field"=>"id_type","label"=>"Type","align"=>"left","width"=>"");
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
$newfield = new input();
$newfield->field="F__titre";
$newfield->multiLang=false;
$newfield->label="Titre";
$newfield->value=${$newfield->field};
$newfield->add();
// FIN FILTRES //////////////////////////////////////////
?>
<?php
$obj_article = new article("type_utilisateur");
$obj_article->fields="id,titre";
$result=$obj_article->query(); 
$list_type_utilisateur=array();
foreach($result as $datas){ 
    $list_type_utilisateur[$datas["id"]]=$datas["titre"];
}
?>    
<?php
// CHARGEMENT LISTE //////////////////////////////////////////
$formList = new formList();
$formList->tables=$myTable;
$formList->fields="*";
$formList->orderby=$orderby;
if($F__titre!="") { $formList->where.="titre LIKE '" . $F__titre . "%'"; }
$formList->clause_where();
$count_datas = $formList->get_datas();


if(count($formList->datasList)>0) {

	include(DOS_INCPAGES_ADMIN  . "list-beforeLoop.php");

	$listRow=array();
	foreach($formList->datasList as $keyId=>$datas){ 
		$valeurs=array();
		include(DOS_INCPAGES_ADMIN  . "list-inLoop.php");

		// chargement d'autres données /////////////////////////////////////// ????

        $valeurs["id_type"]=$list_type_utilisateur[$valeurs["id_type"]];

		// fin chargement données manuellement
		
		$listRow[$keyId]=$valeurs;
	
	} // fin lecture dataList
	
} //count($formList->datasList)
// FIN CHARGEMENT LISTE //////////////////////////////////////////
?>
<?php
include(DOS_INCPAGES_ADMIN  . "list-prepare.php");
?>