<?php

include_once "modele/bd.constante.inc.php";



$CON_PRIXREPAS=htmlspecialchars($_POST['CON_PRIXREPAS']);
$CON_NOMDDFPT=htmlspecialchars($_POST['CON_NOMDDFPT']);
$CON_PRENOMDDFPT=htmlspecialchars($_POST['CON_PRENOMDDFPT']);
// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

if( getUpdateConstante($CON_PRIXREPAS,$CON_NOMDDFPT, $CON_PRENOMDDFPT)){
		header('Location: ./?action=Profil');
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