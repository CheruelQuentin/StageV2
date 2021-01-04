<?php

include_once "modele/bd.matiere.inc.php";

$MAT_LIBELLE=$_POST['MAT_LIBELLE'];

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

getAddMatiere($MAT_LIBELLE);


// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des matières";
include "vue/entete.html.php";
include "vue/vueInsertMatiere.php";
include "vue/pied.html.php";
?>