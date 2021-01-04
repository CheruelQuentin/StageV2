<?php

include_once "modele/bd.stage.inc.php";

if(getDelStage($_GET['id'])){
	header('Location: ./?action=listeStage');
  	exit();
} else{
	echo "erreur.";
}

?>