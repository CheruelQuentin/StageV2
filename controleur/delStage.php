<?php

include_once "modele/bd.formation.inc.php";

if(getDelFormation($_GET['id'])){
	header('Location: ./?action=listeStage');
  	exit();
} else{
	echo "erreur.";
}

?>