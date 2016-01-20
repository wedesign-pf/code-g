<?php
// FONCTIONS DE DEBUGGAGE

// permet d'afficher un array proprement (mieux qu'un simple print_r
function echoa($array) {
	echo("<pre>");
	print_r($array);
	echo("</pre>");
}

function show_erreur($source,$message) {
	echo($source . " | " . $message);
	echo("<hr>");
}


?>