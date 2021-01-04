<?php


include_once "modele/bd.creneau.inc.php";

$CRE_ID=$_POST['CRE_ID'];

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

getDelCreneau($CRE_ID);


// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des creneaux";
include "vue/entete.html.php";
include "vue/vueSupCreneau.php";
include "vue/pied.html.php";
?>