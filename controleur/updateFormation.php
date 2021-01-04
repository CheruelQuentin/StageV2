<?php


include_once "modele/bd.formation.inc.php";


$FORM_CRE=$_POST['FORM_CRE'];
$FORM_STA=$_POST['FORM_STA'];
$FORM_MAT=$_POST['FORM_MAT'];
$FORM_ENS=$_POST['FORM_ENS'];
$FORM_ELEMIN=$_POST['FORM_ELEMIN'];
$FORM_ELEMAX=$_POST['FORM_ELEMAX'];
$FORM_ID=$_POST['FORM_ID'];
// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

getUpdateFormation($FORM_CRE, $FORM_STA, $FORM_MAT, $FORM_ENS, $FORM_ELEMIN, $FORM_ELEMAX, $FORM_ID);


// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Formation";
include "vue/entete.html.php";
include "vue/vueInsertFormation.php";
include "vue/pied.html.php";
?>