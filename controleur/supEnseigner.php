<?php

include_once "modele/bd.enseignant.inc.php";

$ENSR_MAT=$_POST['ENSR_MAT'];
$ENSR_ENS=$_POST['ENSR_ENS'];
// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

getDelEnseigner($ENSR_MAT,$ENSR_ENS);


// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des formations";
include "vue/entete.html.php";
include "vue/vueSupEnseigner.php";
include "vue/pied.html.php";
?>