<?php

include_once "modele/bd.formation.inc.php";


$FORM_LIBELLE=$_POST['FORM_LIBELLE'];
$FORM_CODE=$_POST['FORM_CODE'];
// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

if(getUpdateFormation($FORM_LIBELLE, $FORM_CODE)){
	header('Location: ./?action=listeStage');
  	exit();
} else{
	echo "erreur.";
}


// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des formations";
include "vue/entete.html.php";
include "vue/pied.html.php";
?>