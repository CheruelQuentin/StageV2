<?php


include_once "modele/bd.formation.inc.php";
include_once "modele/bd.stage.inc.php";
include_once "modele/bd.creneau.inc.php";
include_once "modele/bd.matiere.inc.php";
include_once "modele/bd.enseignant.inc.php";

$STA_CRE=$_POST['STA_CRE'];
$STA_FORM=$_POST['STA_FORM'];
$STA_MAT=$_POST['STA_MAT'];
$STA_ENS=$_POST['STA_ENS'];
$STA_ELEMIN=$_POST['STA_ELEMIN'];
$STA_ELEMAX=$_POST['STA_ELEMAX'];
$STA_ID=$_POST['STA_ID'];
// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$creneau=getCreneau(); 
$formation=getFormation(); 
$matiere=getMatiere(); 
$enseignant=getEnseignant();

if(getUpdateStage($STA_CRE, $STA_FORM, $STA_MAT, $STA_ENS, $STA_ELEMIN, $STA_ELEMAX, $STA_ID)){
	header('Location: ./?action=listeFormation');
  	exit();
} else{
	echo "erreur.";
}




// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Formation";
include "vue/entete.html.php";

include "vue/pied.html.php";
?>