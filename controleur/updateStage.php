<?php

include_once "modele/bd.stage.inc.php";


$STA_LIBELLE=$_POST['STA_LIBELLE'];
$STA_CODE=$_POST['STA_CODE'];
// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

if(getUpdateStage($STA_LIBELLE, $STA_CODE)){
	header('Location: ./?action=listeStage');
  	exit();
} else{
	echo "erreur.";
}


// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des stages";
include "vue/entete.html.php";
include "vue/pied.html.php";
?>