<?php

include_once "modele/bd.formation.inc.php";

$FORM_ID=$_POST['FORM_ID'];

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

getDelFormation($FORM_ID);


// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des formations";
include "vue/entete.html.php";
include "vue/vueSupFormation.php";
include "vue/pied.html.php";
?>