<?php

include_once "modele/bd.inscrire.inc.php";

if(	getDelInscrire($_GET['id'],$INS_STA)){
	header('Location: ./?action=listeInscription3');
  	exit();
} else{
	echo "erreur.";
}
        ?>