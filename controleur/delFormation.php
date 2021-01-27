<?php

include_once "modele/bd.formation.inc.php";
include_once "modele/bd.stage.inc.php";
include_once "modele/bd.creneau.inc.php";
include_once "modele/bd.matiere.inc.php";


if(getDelStage($_GET['id'])){
	header('Location: ./?action=listeFormation');
  	exit();
} else{
	echo "erreur.";
}        ?>