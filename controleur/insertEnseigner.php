<?php


include_once "modele/bd.enseigner.inc.php";

$ENSR_MAT=htmlspecialchars($_POST['ENSR_MAT']);
$ENSR_ENS=htmlspecialchars($_POST['ENSR_ENS']);

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

getAddInscrire($ENSR_MAT, $ENSR_ENS);


// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des insrits";
include "vue/entete.html.php";
include "vue/vueInsertEnseigner.php";
include "vue/pied.html.php";
?>