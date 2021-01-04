<?php

include_once "modele/bd.matiere.inc.php";


if(getDelMatiere($_GET['id'])){
	header('Location: ./?action=listeMatiere');
  	exit();
} else{
	echo "erreur.";
}
        ?>