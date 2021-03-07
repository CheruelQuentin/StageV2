<?php


include_once "modele/bd.enseignant.inc.php";


$ENS_NOM=$_POST['ENS_NOM'];
$ENS_PRENOM=$_POST['ENS_PRENOM'];
$ENS_MAIL=$_POST['ENS_MAIL'];
$ENS_TEL=$_POST['ENS_TEL'];
$ENS_ID=$_POST['ENS_ID'];

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

if(getUpdateEnseignant($ENS_NOM, $ENS_PRENOM, $ENS_MAIL, $ENS_TEL, $ENS_ID)){
	header('Location: ./?action=listeEnseignant');
  	exit();
} else{
	echo "erreur.";
}


// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des enseignants";
include "vue/entete.html.php";
include "vue/vueInsertEnseignant.php";
include "vue/pied.html.php";
?>