<?php

include_once "modele/bd.enseignant.inc.php";

$ENS_ID=$_POST['ENS_ID'];

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

getDelEnseignant($ENS_ID);


// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des formations";
include "vue/entete.html.php";
include "vue/vueSupEnseignant.php";
include "vue/pied.html.php";
?>