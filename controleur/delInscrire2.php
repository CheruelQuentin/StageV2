<?php

include_once "modele/bd.inscrire.inc.php";

if(getDelInscrire($_GET['id'],$_GET['stage'])){
	

	header('Location: ./?action=listeInscription3');
  	exit();
} else{
	echo "erreur.";
}
        ?>