<?php

include_once "modele/bd.inscrire.inc.php";

if(getDelInscrire($_GET['idEle'], $_GET['idForm'])){
	header('Location: ./?action=listeInscription');
  	exit();
} else{
	echo "erreur.";
}
        ?>