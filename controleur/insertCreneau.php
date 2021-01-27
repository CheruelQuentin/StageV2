<?php


include_once "modele/bd.creneau.inc.php";
include_once "modele/bd.matiere.inc.php";
include_once "modele/bd.formation.inc.php";
include_once "modele/bd.stage.inc.php";
include_once "modele/bd.enseignant.inc.php";
include_once "modele/bd.preferer.inc.php";

$CRE_DATE=$_POST['CRE_DATE'];
$CRE_HEUREDEB=$_POST['CRE_HEUREDEB'];
$CRE_SALLE=$_POST['CRE_SALLE'];
$CRE_HEUREFIN=$_POST['CRE_HEUREFIN'];
$STA_ENS=$_SESSION["UTIL_ENS"];
$STA_ELEMIN=$_POST['STA_ELEMIN'];
$STA_ELEMAX=$_POST['STA_ELEMAX'];
$CRE_MAT=$_POST['CRE_MAT'];
$STA_MAT=$CRE_MAT;


// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
if(getAddCreaneau($CRE_DATE, $CRE_HEUREDEB, $CRE_SALLE, $CRE_HEUREFIN)){

for($i=0;$i<sizeof($_POST['choixForm']);$i++){
	$STA_FORM=$_POST['choixForm'][$i];
}
$CRE_ID=getCreneauIdByInfo2($CRE_DATE, $CRE_HEUREDEB, $CRE_SALLE, $CRE_HEUREFIN);


$STA_CRE=$CRE_ID;
//Ajout des inscriptions aux formations
getAddStage($STA_CRE, $STA_FORM, $STA_MAT, $STA_ENS, $STA_ELEMIN, $STA_ELEMAX);

$PREF_CRE=$CRE_ID;
$PREF_ENS=$STA_ENS;

getAddPreferer($PREF_ENS,$PREF_CRE);

header('location: ./?action=listeCreneau');
}
// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des creneaux";
include "vue/entete.html.php";
include "vue/vueInsertCreneau.php";
include "vue/pied.html.php";
?>