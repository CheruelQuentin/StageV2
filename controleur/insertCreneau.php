<?php


include_once "modele/bd.creneau.inc.php";
include_once "modele/bd.matiere.inc.php";
include_once "modele/bd.formation.inc.php";
include_once "modele/bd.stage.inc.php";
include_once "modele/bd.enseignant.inc.php";
include_once "modele/bd.preferer.inc.php";


$CRE_DATE=htmlspecialchars($_POST['CRE_DATE']);
$CRE_HEUREDEB=htmlspecialchars($_POST['CRE_HEUREDEB']);
$CRE_SALLE=htmlspecialchars($_POST['CRE_SALLE']);
$CRE_HEUREFIN=htmlspecialchars($_POST['CRE_HEUREFIN']);
$STA_ENS=htmlspecialchars($_SESSION["UTIL_ENS"]);
$STA_ELEMIN=htmlspecialchars($_POST['STA_ELEMIN']);
$STA_ELEMAX=htmlspecialchars($_POST['STA_ELEMAX']);
$CRE_MAT=htmlspecialchars($_POST['CRE_MAT']);
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