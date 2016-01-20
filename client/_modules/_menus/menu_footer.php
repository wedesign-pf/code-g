<?php
$menu="footer";
$menuPages =$thisSite->menus[$menu];

/////////////////////////////////////////////////
foreach($menuPages as $idRUB=>$listSRUB) {

	$datasRUB = $thisSite->pages[$idRUB];
	
	$classA="showLoader";
	//list($lienRub,$classA)=OLDprepareMenuLink($datasRUB["page_url"],$datasRUB["page_type"],$classA);
	list($lienRub,$classA)=prepareMenuLink($idRUB,"","");
    
	$RUBS=array();
	$RUBS["id"]=$idRUB;
	$RUBS["classA"]=$classA;
	$RUBS["lien"]=$lienRub;
	$RUBS["titre"]=$datasRUB["titre"];

	add_plan_du_site($menu,$idRUB,$lienRub,$datasRUB["titre"],$SRUBS);

	$smarty->append("RUBSBas",$RUBS);

}
?>