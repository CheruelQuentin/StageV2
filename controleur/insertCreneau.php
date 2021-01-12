<?php


include_once "modele/bd.creneau.inc.php";
include_once "modele/bd.matiere.inc.php";
include_once "modele/bd.formation.inc.php";
include_once "modele/bd.stage.inc.php";
include_once "modele/bd.enseignant.inc.php";

$CRE_DATE=$_POST['CRE_DATE'];
$CRE_HEUREDEB=$_POST['CRE_HEUREDEB'];
$CRE_SALLE=$_POST['CRE_SALLE'];
$CRE_HEUREFIN=$_POST['CRE_HEUREFIN'];
$FORM_ELEMIN=$_POST['FORM_ELEMIN'];
$FORM_ELEMAX=$_POST['FORM_ELEMAX'];  
// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
if(getAddCreaneau($CRE_DATE, $CRE_HEUREDEB, $CRE_SALLE, $CRE_HEUREFIN)){
for($i=0;$i<sizeof($_POST['choixForm2']);$i++){
	$FORM_MAT=$_POST['choixForm2'][$i];
}
for($i=0;$i<sizeof($_POST['choixForm']);$i++){
	$FORM_STA=$_POST['choixForm'][$i];
}
$CRE_ID=getCreneauIdByInfo2($CRE_DATE, $CRE_HEUREDEB, $CRE_SALLE, $CRE_HEUREFIN);
$FORM_CRE=$CRE_ID;
//Ajout des inscriptions aux formations
getAddFormation($FORM_CRE, $FORM_STA, $FORM_MAT, $FORM_ENS, $FORM_ELEMIN, $FORM_ELEMAX);
$CRE_ID =$PREF_CRE;


getAddPreferer($PREF_CRE,$PREF_ENS);
header('location: ./?action=listeCreneau');
}
// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des creneaux";
include "vue/entete.html.php";
include "vue/vueInsertCreneau.php";
include "vue/pied.html.php";
?>