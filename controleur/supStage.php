<?php

include_once "modele/bd.stage.inc.php";

$STA_CODE=$_POST['STA_CODE'];

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

getDelStage($STA_CODE);


// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des stages";
include "vue/entete.html.php";
include "vue/vueSupStage.php";
include "vue/pied.html.php";
?>