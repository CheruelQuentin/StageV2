<?php


include_once "modele/bd.formation.inc.php";
$FORM_CODE= NULL;
$FORM_LIBELLE=$_POST['FORM_LIBELLE'];

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

getAddFormation($FORM_CODE, $FORM_LIBELLE);


// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des stages";
include "vue/entete.html.php";
include "vue/vueInsertStage.php";
include "vue/pied.html.php";
?>