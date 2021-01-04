<?php

include_once "modele/bd.eleve.inc.php";

$ELE_ID=$_POST['ELE_ID'];

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

getDelEleve($ELE_ID);


// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des eleves";
include "vue/entete.html.php";
include "vue/vueSupEleve.php";
include "vue/pied.html.php";
?>