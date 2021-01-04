<?php

include_once "modele/bd.etablissement.inc.php";

if(getDelEtablissement($_GET['id'])){
	header('Location: ./?action=listeEtablissement');
  	exit();
} else{
	echo "erreur.";
}


?>