<?php
include_once "modele/bd.creneau.inc.php";
include_once "modele/bd.preferer.inc.php";
include_once "modele/bd.enseignant.inc.php";



// recuperation des donnees GET, POST, et SESSION
;

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$listeCreneauPropo=getPropo();

// traitement si necessaire des donnees recuperees
;
// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des creneaux";
include "vue/entete.html.php";
include "vue/vueListeCreneauPropo.php";
include "vue/pied.html.php";
?>