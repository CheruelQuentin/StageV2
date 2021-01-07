<?php


include_once "modele/bd.creneau.inc.php";

$CRE_DATE=$_POST['CRE_DATE'];
$CRE_HEUREDEB=$_POST['CRE_HEUREDEB'];
$CRE_SALLE=$_POST['CRE_SALLE'];
$CRE_HEUREFIN=$_POST['CRE_HEUREFIN'];
// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

getAddCreaneau($CRE_DATE, $CRE_HEUREDEB, $CRE_SALLE, $CRE_HEUREFIN);


// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des creneaux";
include "vue/entete.html.php";
include "vue/vueInsertCreneau.php";
include "vue/pied.html.php";
?>