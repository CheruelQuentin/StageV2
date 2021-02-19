<?php

include_once "modele/bd.creneau.inc.php";

if(getDelCreneau($_GET['id'])){
	header('Location: ./?action=listeCreneauAdmin');
  	exit();
} else{
	echo "erreur.";
}

        ?>