<?php


include_once "modele/bd.enseigner.inc.php";


$ENSR_MAT=$_POST['ENSR_MAT'];
$ENSR_ENS=$_POST['ENSR_ENS'];
// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

getUpdateEnseigner($ENSR_MAT, $ENSR_ENS);


// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Enseigner";
include "vue/entete.html.php";
include "vue/vueInsertEnseigner.php";
include "vue/pied.html.php";
?>