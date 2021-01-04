<?php


include_once "modele/bd.inscrire.inc.php";

$INS_ELE=$_POST['INS_ELE'];
$INS_FORM=$_POST['INS_FORM'];

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

getAddInscrire($INS_ELE, $INS_FORM);


// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des insrits";
include "vue/entete.html.php";
include "vue/vueInsertInscrire.php";
include "vue/pied.html.php";
?>