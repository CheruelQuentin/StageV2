<?php

include_once "modele/bd.inscrire.inc.php";

$INS_ELE=$_POST['INS_ELE'];
$INS_STA=$_POST['INS_STA'];
// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

getDelEnseigner($INS_ELE,$INS_STA);


// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des inscrits";
include "vue/entete.html.php";
include "vue/vueSupInscrire.php";
include "vue/pied.html.php";
?>