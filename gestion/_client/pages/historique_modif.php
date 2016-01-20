<?php
$myTable=$thisSite->PREFIXE_TBL_CLI . "elements_histo_modif";
$orderby="id DESC";
$actionsPage=array();
$listCols=array();
$listCols[]=array("field"=>"id","label"=>"#","align"=>"center","width"=>"5%");
$listCols[]=array("field"=>"id_utilisateur","label"=>"Utilisateur","align"=>"left","width"=>"");
$listCols[]=array("field"=>"datetime","label"=>"Date de modification","align"=>"left","width"=>"");
if($__POST["F__element"]=="" || $__POST["F__element"]=="noneItem") {                      $listCols[]=array("field"=>"id_element","label"=>"&Eacute;lément","align"=>"left","width"=>"");}
if($__POST["F__champ"]=="" || $__POST["F__champ"]=="noneItem") {                      $listCols[]=array("field"=>"id_champ","label"=>"Champ","align"=>"left","width"=>"");}
$listCols[]=array("field"=>"valeur_avant","label"=>"Valeur avant","align"=>"left","width"=>"");
$listCols[]=array("field"=>"valeur_apres","label"=>"Valeur après","align"=>"left","width"=>"");


// Récupération des champs 
$obj_article = new article("champ");
$obj_article->fields="id,titre, filtre1";
$result=$obj_article->query(); 
$tabChamp=array();
$list_champ_crypte=array();
foreach($result as $datas){ 
    $tabChamp[$datas["id"]]=$datas["titre"];
    if($datas["filtre1"]=="1"){
        $list_champ_crypte[$datas["id"]]=$datas["titre"];
    }
}

// Récupération des éléments
$mySelect = new mySelect(__FILE__);
$mySelect->tables=$thisSite->PREFIXE_TBL_CLI . "elements";
$mySelect->fields="id,titre";
$mySelect->where="actif=:actif";
$mySelect->whereValue["actif"]="1";
$mySelect->orderby="titre ASC";
$result=$mySelect->query();
$tabElement=array();
foreach($result as $row){ 
    $tabElement[$row["id"]]=$row["titre"];
}

// Récupération des utilisateurs
$mySelect = new mySelect(__FILE__);
$mySelect->tables=$thisSite->PREFIXE_TBL_CLI . "utilisateurs";
$mySelect->fields="id,titre";
$mySelect->where="actif=:actif";
$mySelect->whereValue["actif"]="1";
$mySelect->orderby="titre ASC";
$result=$mySelect->query();
$tabUser=array();
foreach($result as $row){ 
    $tabUser[$row["id"]]=$row["titre"];
}

// Récupération des administrateurs
$mySelect = new mySelect(__FILE__);
$mySelect->tables=$thisSite->PREFIXE_TBL_ADM . "administrateurs";
$mySelect->fields="id,login, titre";
$mySelect->where="actif=:actif";
$mySelect->whereValue["actif"]="1";
$mySelect->orderby="titre ASC";
$result=$mySelect->query();
foreach($result as $row){ 
    $tabUser["admin-".$row["login"]]=$row["titre"]." (Admin)";
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
                
                deleteMediasbyIdParent("elements_histo_modif",$idDel); //////
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
$newfield->field="F__utilisateur";
$newfield->widthLabel=0;
$newfield->label="Utilisateur";
$newfield->noneItem=true;
$newfield->items=$tabUser;
$newfield->value=$F__utilisateur;
$newfield->javascript="onChange='submitFiltres()'";
$newfield->add();

$newfield = new select();
$newfield->field="F__element";
$newfield->widthLabel=0;
$newfield->label="&Eacute;lement";
$newfield->noneItem=true;
$newfield->items=$tabElement;
$newfield->value=$F__element;
$newfield->javascript="onChange='submitFiltres()'";
$newfield->add();

$newfield = new select();
$newfield->field="F__champ";
$newfield->widthLabel=0;
$newfield->label="Champ";
$newfield->noneItem=true;
$newfield->items=$tabChamp;
$newfield->value=$F__champ;
$newfield->javascript="onChange='submitFiltres()'";
$newfield->add();
// FIN FILTRES //////////////////////////////////////////
?>

<?php
// Chargement liste /////////////////////////////////////// 
$formList = new formList();
$formList->tables=$myTable;
$formList->fields="*";
$formList->orderby=$orderby;
$formList->where="id!=0";
if($F__element!="" && $F__element!='noneItem') { $formList->where.=" AND id_element='" . $F__element . "'"; }
if($F__champ!="" && $F__champ!='noneItem') { $formList->where.=" AND id_champ='" . $F__champ . "'"; }
if($F__utilisateur!="" && $F__utilisateur!='noneItem') { $formList->where.=" AND id_utilisateur='" . $F__utilisateur . "'"; }
$formList->clause_where();
$count_datas = $formList->get_datas();

if(count($formList->datasList)>0) {

	include(DOS_INCPAGES_ADMIN  . "list-beforeLoop.php");

	$listRow=array();
	foreach($formList->datasList as $keyId=>$datas){ 
       
		$valeurs=array();
		include(DOS_INCPAGES_ADMIN  . "list-inLoop.php");


		// chargement d'autres données ///////////////////////////////////////

        // Décrypter les mots de passe
        if(isset($list_champ_crypte[$valeurs["id_champ"]])){
            $valeurs["valeur_avant"] = decrypt_string("KEY", $valeurs["valeur_avant"]);    
            $valeurs["valeur_apres"] = decrypt_string("KEY", $valeurs["valeur_apres"]);   
        }

        $valeurs["id_champ"]=$tabChamp[$valeurs["id_champ"]];
        $valeurs["id_element"]=$tabElement[$valeurs["id_element"]];
        
      
        // Convetir la date au bon format
        $dt = new DateTime();
        $valeurs["datetime"]= $dt->format('d-m-Y à H:i:s');

        // Récupérer le prefix de id_utilisateur "admin-"
         $prefix_utilisateur = substr($valeurs["id_utilisateur"],0,6);
         if($prefix_utilisateur == "admin-"){
            // garder les valeurs apres "admin-"
            $nom_utilisateur = substr($valeurs["id_utilisateur"],6);
            $valeurs["id_utilisateur"] = ucfirst($nom_utilisateur);     
         }
        
		// fin chargement données manuellement
		$listRow[$keyId]=$valeurs;
	
	} // fin lecture dataList

}
// FIN CHARGEMENT LISTE //////////////////////////////////////////
?>
<?php
include(DOS_INCPAGES_ADMIN  . "list-prepare.php");
?>