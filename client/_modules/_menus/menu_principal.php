<?php
$menu="principal";
$menuPages =$thisSite->menus[$menu];
//
//echoa($menuPages);
/////////////////////////////////////////////////
foreach($menuPages as $idRUB=>$listSRUB) {
	//echoa($idRUB);
	//echoa($listSRUB);
	// niveau Rubrique
	$datasRUB = $thisSite->pages[$idRUB];

	// si page en cours
	if($idRUB==$thisSite->current_rub) { 
		$classLI="rubA"; 
		$classA=""; 
	} else {
        $classLI="rub";
	    $classA="";
    }

	
	if($idRUB==10) { $datasRUB["titre"]="<i class='fa fa-15x fa-home'></i>"; } //

	// lien niveau RUB	
	//list($lienRub,$classA)=OLDprepareMenuLink($datasRUB["page_url"],$datasRUB["page_type"],$classA);
    list($lienRub,$classA)=prepareMenuLink($idRUB,"",$classA);

    if($datasRUB["page_type"]=="page" || $datasRUB["page_type"]=="firstSrub") { $lienRubRacine=$lienRub. "/"; } else { $lienRubRacine=""; }

    if($datasRUB["page_type"]=="firstSrub" && is_array($listSRUB)) {
        if(count($listSRUB)>0) {   
            $temp=array_keys($listSRUB);
            $datasSRUB = $thisSite->pages[$temp[0]];
            $lienRub=$lienRub."/".$datasSRUB["page_url"];
        }
     }
    
	// chargement du contenu des sous rubriques
	$SRUBS=array();
	if(is_array($listSRUB) && $datasRUB["show_sousmenu"]==1) { 
		if(count($listSRUB)>0) { 
			foreach($listSRUB as $idSRUB=>$listSSRUB) { 
				$datasSRUB = $thisSite->pages[$idSRUB];
				$tempS=array();
				$tempS["id"]=$idSRUB;
                $tempS["classLI"]="srub";
                if($datasSRUB["page_type"]=="page") { $tempS["classLI"].=" showLoader"; }
				//list($tempS["lien"],$tempS["classA"])=OLDprepareMenuLink($lienRubRacine . $datasSRUB["page_url"],$datasSRUB["page_type"],"");
				list($tempS["lien"],$tempS["classA"])=prepareMenuLink($idSRUB,$lienRubRacine,"");
				$tempS["titre"]=$datasSRUB["titre"];
				if($datasSRUB["page_type"]=="page") { $lienSRubRacine=$datasSRUB["page_url"] . "/"; } else { $lienSRubRacine=""; }
				// chargement du contenu des sous sous rubriques
				$sRubs=array();
				if(is_array($listSSRUB)) { 
					if(count($listSSRUB)>0) { 
						foreach($listSSRUB as $idSSRUB=>$nada) { 
							$datasSSRUB = $thisSite->pages[$idSSRUB];
							$tempSS=array();
							$tempSS["id"]=$idSSRUB;
                            $tempSS["classLI"]="ssrub";
                            if($datasSSRUB["page_type"]=="page") { $tempSS["classLI"].=" showLoader"; }
							//list($tempSS["lien"],$tempSS["classA"])=OLDprepareMenuLink($lienRubRacine . $lienSRubRacine . $datasSSRUB["page_url"],$datasSSRUB["page_type"],"");
                            list($tempSS["lien"],$tempSS["classA"])=prepareMenuLink($idSSRUB,$lienRubRacine. $lienSRubRacine,"");
							$tempSS["titre"]=$datasSSRUB["titre"];
							$sRubs[]=$tempSS;
						}
					}
				} 
				$tempS["sRubs"]=$sRubs;
				$SRUBS[]=$tempS;
			}
		}
	}

//echoa($SRUBS);
	$RUBS=array();
	$RUBS["id"]=$idRUB;
	$RUBS["classLI"]=$classLI;
	$RUBS["classA"]=$classA;
	$RUBS["lien"]=$lienRub;
    $RUBS["page_type"]=$datasRUB["page_type"];
    $RUBS["page_url"]=$datasRUB["page_url"];
	$RUBS["titre"]=$datasRUB["titre"];
    $RUBS["explications"]=$datasRUB["explications"];
    $RUBS["couleur"]=$datasRUB["couleur"];
	$RUBS["SRUBS"]=$SRUBS;

	add_plan_du_site($menu,$idRUB,$lienRub,$datasRUB["titre"],$SRUBS);

	$smarty->append("RUBS",$RUBS);

}
?>