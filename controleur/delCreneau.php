<?php

include_once "modele/bd.creneau.inc.php";

if(getDelCreneau($_GET['id'])){
	header('Location: ./?action=listeCreneau');
  	exit();
} else{
	echo "erreur.";
}

        ?>