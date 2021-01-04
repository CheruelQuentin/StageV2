<?php

include_once "modele/bd.preferer.inc.php";

$PREF_CRE=$_POST['PREF_CRE'];
$PREF_ENS=$_POST['PREF_ENS'];
// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

getDelPreferer($PREF_CRE,$PREF_ENS);


// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste preferer";
include "vue/entete.html.php";
include "vue/vueSupPreferer.php";
include "vue/pied.html.php";
?>