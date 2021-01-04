<?php

include_once "modele/bd.formation.inc.php";
include_once "modele/bd.creneau.inc.php";
include_once "modele/bd.stage.inc.php";
include_once "modele/bd.matiere.inc.php";
include_once "modele/bd.enseignant.inc.php";
$FORM_CRE=getCreneauIdByInfo($_POST['FORM_CRE']);
$FORM_STA=getStageIdByInfo($_POST['FORM_STA']);
$FORM_MAT=getMatiereIdByInfo($_POST['FORM_MAT']);
$FORM_ENS=getEnseignantIdByInfo($_POST['FORM_ENS']);
$FORM_ELEMIN=$_POST['FORM_ELEMIN'];
$FORM_ELEMAX=$_POST['FORM_ELEMAX'];

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

getAddFormation($FORM_CRE, $FORM_STA, $FORM_MAT, $FORM_ENS, $FORM_ELEMIN, $FORM_ELEMAX);


// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des formations";
include "vue/entete.html.php";
include "vue/vueInsertFormation.php";
include "vue/pied.html.php";
?>