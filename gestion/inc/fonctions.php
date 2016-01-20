<?php

function actionFormMaj($actionForm) { 
	global $myAdmin;
    global $formMaj;
    
    $myAdmin->nextID="";
    
	if($actionForm=="valider") {
       $myAdmin->pageCurrent=$myAdmin->getChronoPages(1);
        echo("<script>window.location.href='index.php'; </script>");
    }
 
    if($actionForm=="appliquerAndAJout") {
        $myAdmin->pageCurrent=$myAdmin->getChronoPages(0);
        $myAdmin->nextID="0";
        $formMaj->whereValue["id"]=0;
        $formMaj->clause_where();
        echo("<script>window.location.href='index.php'; </script>");
    }
    
    return false;
}



function RemoveActionPage($action) { 
	global $actionsPage;
	global $smarty;
	
	unset($actionsPage[array_search($action,$actionsPage)]);
	$smarty->assign("actionsPage", $actionsPage);
}


function getInfosPageParent($myTable,$lg="",$idParent=0,$field="titre") {
	global $smarty;
	global $datas_lang;
	
	if($idParent==0) { return; }
	
	$mySelect = new mySelect(__FILE__);
	$mySelect->tables=$myTable;
	$mySelect->fields=$field;
	if($lg=="") {
		$mySelect->where="id=".$idParent;
	} else {
		$mySelect->where="id=".$idParent . " AND lg='" . $lg . "'";
	}
	$mySelect->limit=1;
	$result=$mySelect->query();
	$row = current($result);
	
	$infosParent="<div id='infosParent'>";
	$infosParent.="<span>".$idParent."</span>";
	$infosParent.="<span>".$row[$field] . "</span>";
	$infosParent.="</div>";
	$infosParent.="<div id='btnRetourList' class='left btnAction'>" . $datas_lang["retour"] ."</div>";

	$smarty->assign("infosParent", $infosParent);
	return $infosParent;
}

function deleteMediasbyIdParent($field_media,$idParent) {
    global $thisSite;
    
	$myDelete = new myDelete(__FILE__);
	$myDelete->table=$thisSite->PREFIXE_TBL_GEN . "medias";
	$myDelete->where="id_parent=" . $idParent . " AND field_media LIKE '" . $field_media . "%'";
	$result=$myDelete->execute();
}

function deleteArbo($idDel) {
	global $thisSite;
    
	$arbo_site=array();
	$mySelect = new mySelect(__FILE__);
	$mySelect->tables=$thisSite->PREFIXE_TBL_GEN . "arbo";
	$mySelect->fields="*";
	$result=$mySelect->query();
	foreach($result as $row){
		$nivRub=unserialize($row['arbo_menu']);
		//echoa($row['code_menu']);
		//echoa($nivRub);
		if (array_key_exists($idDel, $nivRub)) { unset($nivRub[$idDel]);}
		if(is_array($nivRub)) {	foreach($nivRub as $idRub=>$nivsRub){
			//echoa($nivsRub);
			if(is_array($nivsRub)) { if (array_key_exists($idDel, $nivsRub)) { unset($nivRub[$idRub][$idDel]);} }
			if(is_array($nivsRub)) {	foreach($nivsRub as $idsRub=>$nivssRub){
				//echoa($nivssRub);
				if(is_array($nivssRub)) { if (array_key_exists($idDel, $nivssRub)) { unset($nivRub[$idRub][$idsRub][$idDel]);} }
			}} //$nivsRub 
		}} //$nivRub 
		
		//echoa($nivRub);	
		$myUpdate = new myUpdate(__FILE__);
		$myUpdate->table=$thisSite->PREFIXE_TBL_GEN . "arbo";
		$myUpdate->field["arbo_menu"]=serialize($nivRub);
		$myUpdate->where="code_menu='" . $row['code_menu'] . "'";
		$result=$myUpdate->execute();

	} // suppression dans l'arbo

}


// Supprime une page à  partir d'une table annexe
function deletePagebyArticle($table,$idDel) {
    global $thisSite;
    
	$myDelete = new myDelete(__FILE__);
	$myDelete->table=$thisSite->PREFIXE_TBL_GEN . "pages";
	$myDelete->where="article_tableId='" . $table . "." . $idDel . "'";
	$result=$myDelete->execute();
	
	deleteArbo($idDel);// suppression dans l'arbo

}

// affichage fleche de déplacement
function arrowsMove($table,$clauseWhere,$chrono){	
		
		global $actionsPage;
		global $PDO;
		global $myAdmin;
        global $thisSite;
		
		$orderby = $myAdmin->getDatasPage("orderby");
		
		if($orderby=="") { $orderby="chrono ASC"; }
		
		if(!in_array("move", $actionsPage)) { return "";}

		if(strpos($orderby, "chrono")===false) {  return "<i  class='fa fa-15x fa-ban'></i>"; } 

		if(strpos($orderby, "ASC")===false) { $sens="DESC"; } else {$sens="ASC"; }
		
		$requete= "SELECT chrono FROM " . $table;
		if($clauseWhere!="") { $requete.= " WHERE " . $clauseWhere; }
		$requete.= " ORDER BY chrono ASC LIMIT 1";
		$result = $PDO->free_requete($requete);
		$row = $result->fetch();
		$firstChrono=$row->chrono;
		
		$requete= "SELECT chrono FROM " . $table;
		if($clauseWhere!="") { $requete.= " WHERE " . $clauseWhere; }
		$requete.= " ORDER BY chrono DESC LIMIT 1";
		$result = $PDO->free_requete($requete);
		$row = $result->fetch();
		$lastChrono=$row->chrono;

		if($sens=="DESC") { $arrayUp="down"; $arrayDown="up"; } else {  $arrayUp="up"; $arrayDown="down"; }
		$arrowsMove="";
		$racine_icone="fa-chevron-";
		if ($chrono!=$firstChrono) { $arrowsMove.="<i data-id=" . $chrono . " class='arrow" . $arrayUp ." fa fa-15x " . $racine_icone . $arrayUp . "'></i>"; } 
		if ($chrono!=$lastChrono && $arrowsMove!="") { $arrowsMove.=" | "; } 
     	if ($chrono!=$lastChrono) { $arrowsMove.="<i data-id=" . $chrono . " class='arrow" . $arrayDown ." fa fa-15x " . $racine_icone . $arrayDown . "'></i>";  }
		//$arrowsMove.="$chrono";
		return $arrowsMove;
}	

function moveList($table,$ids){	
	global $PDO;
	
	list($idOrigin,$idTarget) = explode(">",$ids);
	
	$result = $PDO->free_requete("SELECT chrono FROM " . $table . " WHERE id=" . $idOrigin);
	$row = $result->fetch();
	$chronoOrigin=$row->chrono;
	
	$result = $PDO->free_requete("SELECT chrono FROM " . $table . " WHERE id=" . $idTarget);
	$row = $result->fetch();
	$chronoTarget=$row->chrono;
	
	$PDO->free_requete("UPDATE " . $table . " SET chrono='$chronoTarget' WHERE id=" . $idOrigin);
	$PDO->free_requete("UPDATE " . $table . " SET chrono='$chronoOrigin' WHERE id=" . $idTarget);	
}

function apache_module_exists($module)
{

    if (function_exists('apache_get_modules')) {
      $modules = apache_get_modules();
      $result = in_array($module, $modules);
    } else {
      $result =  1; //getenv('HTTP_MOD_REWRITE')=='On' ? true : false ;
    }
  
    return $result;
}
?>