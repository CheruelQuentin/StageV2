<?php

include_once "modele/bd.preferer.inc.php";


$PREF_ENS=$_POST['PREF_ENS'];
$PREF_CRE=$_POST['PREF_CRE'];
$PREF_EDT=$_POST['PREF_EDT'];
// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

getUpdatePreferer($PREF_CRE, $PREF_ENS,$PREF_EDT);


// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Enseigner";
include "vue/entete.html.php";
include "vue/vueInsertPreferer	.php";
include "vue/pied.html.php";
?>