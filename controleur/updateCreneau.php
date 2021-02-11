<?php

include_once "modele/bd.creneau.inc.php";



$CRE_DATE=htmlspecialchars($_POST['CRE_DATE']);
$CRE_DATEFIN=htmlspecialchars($_POST['CRE_DATEFIN']);
$CRE_HEUREDEB=htmlspecialchars($_POST['CRE_HEUREDEB']);
$CRE_SALLE=htmlspecialchars($_POST['CRE_SALLE']);
$CRE_HEUREFIN=htmlspecialchars($_POST['CRE_HEUREFIN']);
$CRE_ID=htmlspecialchars($_POST['CRE_ID']);

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

if(getUpdateCreneau($CRE_DATE,$CRE_DATEFIN, $CRE_HEUREDEB, $CRE_SALLE, $CRE_HEUREFIN, $CRE_ID)){
		header('Location: ./?action=listeCreneau');
  	exit();
} else{
	echo "erreur.";
	
}



// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Creneau";
include "vue/entete.html.php";
include "vue/vueInsertCreneau.php";
include "vue/pied.html.php";
?>