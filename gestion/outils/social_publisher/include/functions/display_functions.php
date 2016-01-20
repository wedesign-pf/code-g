<?php

function display_pagination($criteria=array()) {
	$nbTotal = $criteria['nbTotal'];
	$start = $criteria['start'];
	$nb_display = $criteria['nb_display'];
	$nbPageMax = $criteria['nbPageMax'];
	
	if(count($_GET)>0) {
		$nb = count($_GET);
		foreach($_GET as $ind=>$value) {
			if($ind!='page') {
				$getParam .= $ind.'='.$value.'&';
			}
		}
		$getParam = '?'.substr($getParam,0,-1).'';
	}
	else {
		$getParam = '?';
	}
	
	if($getParam!='') $getParam .= '&';
	
	if($nbPageMax=='') $nbPageMax=10;
	
	// Pagination display
	if($nb_display!=0) $begin = $start/$nb_display;
	$debut = $begin-round($nbPageMax/2);
	$fin = $begin+round($nbPageMax/2);
	if($nb_display!=0) $nbPageResult = $nbTotal/$nb_display;
	
	/*
	echo '$nbTotal: '.$nbTotal.'<br>';
	echo '$start: '.$start.'<br>';
	echo '$nb_display: '.$nb_display.'<br>';
	*/
	
	if($nbTotal>0 && $nbTotal>$nb_display) {
		if($fin<$nbPageMax)$fin = $nbPageMax;
		if($debut<0)$debut = 0;
		$previous = $begin-1;
		$next = $begin+1;
		
		$display .= '';
		if($previous>=0) {
			$tmpStart = ($previous*$nb_display);
			$display .= '<a class="y_pagination" href="'.$getParam.'page='.($previous+1).'" title="'.($previous+1).'"><small><<</small></a>&nbsp;'; //($previous+1)
		}
		
		for ($i=$debut; $i<$fin && $i<$nbPageResult;$i++) {
		  $d = $i+1;
		  $start = $i*$nb_display;
		  $tmpStart = $start;
		  
		  if ($i == $begin)  $display .= '<font color="red">'.$d.'&nbsp;</font>';
		  else {
		  	$display .= '<a class="y_pagination" href="'.$getParam.'page='.($i+1).'" title="'.($i+1).'"><small>'.$d.'</small></a>&nbsp;'; //($i+1)
		  }
		}
		
		if($next<$nbPageResult) {
			$tmpStart = ($next*$nb_display);
			$display .= '&nbsp;<a class="y_pagination" href="'.$getParam.'page='.($next+1).'" title="'.($next+1).'"><small>>></small></a>'; //($next+1)
		}
		$display .= '';
	}
	
	return $display;
}

?>