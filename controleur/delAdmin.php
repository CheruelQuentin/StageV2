<?php

include_once "modele/bd.utilisateur.inc.php";

if(getDelAdmin($_GET['id'])){
	header('Location: ./?action=listeSAdmin');
  	exit();
} else{
	echo "erreur.";
}

        ?>