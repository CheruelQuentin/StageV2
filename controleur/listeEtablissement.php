<?php

include_once "modele/bd.etablissement.inc.php";


// recuperation des donnees GET, POST, et SESSION
;

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$listeEtablissement = getEtablissement();

// traitement si necessaire des donnees recuperees
;
// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des établissements";
include "vue/entete.html.php";
include "vue/vueListeEtablissement.php";
include "vue/pied.html.php";
?>