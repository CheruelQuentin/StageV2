<?php

include_once "modele/bd.enseignant.inc.php";

if(getDelEnseignant($_GET['id'])){
	header('Location: ./?action=listeEnseignant');
  	exit();
} else{
	echo "erreur.";
}

        ?>