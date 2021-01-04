<?php

include_once "modele/bd.etablissement.inc.php";

$ETA_ID=$_POST['ETA_ID'];

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

getDelEtablissement($ETA_ID);


// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des établissements";
include "vue/entete.html.php";
include "vue/vueSupEtablissement.php";
include "vue/pied.html.php";
?>