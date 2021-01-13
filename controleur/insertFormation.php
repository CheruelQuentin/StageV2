<?php

include_once "modele/bd.formation.inc.php";
include_once "modele/bd.creneau.inc.php";
include_once "modele/bd.stage.inc.php";
include_once "modele/bd.matiere.inc.php";
include_once "modele/bd.enseignant.inc.php";
$STA_CRE=getCreneauIdByInfo($_POST['STA_CRE']);
$STA_FORM=getFormationIdByInfo($_POST['STA_FORM']);
$STA_MAT=getMatiereIdByInfo($_POST['STA_MAT']);
$STA_ENS=getEnseignantIdByInfo($_POST['STA_ENS']);
$STA_ELEMIN=$_POST['STA_ELEMIN'];
$STA_ELEMAX=$_POST['STA_ELEMAX'];

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

getAddStage($STA_CRE, $STA_FORM, $STA_MAT, $STA_ENS, $STA_ELEMIN, $STA_ELEMAX);


// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des formations";
include "vue/entete.html.php";
include "vue/vueInsertFormation.php";
include "vue/pied.html.php";
?>