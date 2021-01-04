<?php


include_once "modele/bd.stage.inc.php";
$STA_CODE= NULL;
$STA_LIBELLE=$_POST['STA_LIBELLE'];

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

getAddStage($STA_CODE, $STA_LIBELLE);


// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des stages";
include "vue/entete.html.php";
include "vue/vueInsertStage.php";
include "vue/pied.html.php";
?>