<?php


include_once "modele/bd.enseignant.inc.php";
include_once "modele/bd.utilisateur.inc.php";
include_once "modele/bd.travailler.inc.php";


$ENS_NOM=htmlspecialchars($_POST['ENS_NOM']);
$ENS_PRENOM=htmlspecialchars($_POST['ENS_PRENOM']);
$ENS_MAIL=htmlspecialchars($_POST['ENS_MAIL']);
$ENS_TEL=htmlspecialchars($_POST['ENS_TEL']);
$ENS_DATENAISS=htmlspecialchars($_POST['ENS_DATENAISS']);

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

if(getAddEnseignant($ENS_NOM, $ENS_PRENOM, $ENS_MAIL, $ENS_TEL, $ENS_DATENAISS)){
	
$ENS_ID =getEnseignantIdByInfo2($ENS_NOM,$ENS_PRENOM,$ENS_DATENAISS,$ENS_MAIL);

addUtiEnseignant($ENS_MAIL, $ENS_DATENAISS,$ENS_ID);

$TRA_ENS = $ENS_ID;


getAddTravailler($TRA_ENS);
}
// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "insertion des enseignants";
include "vue/entete.html.php";
include "vue/vueInsertEnseignant.php";
include "vue/pied.html.php";
?>