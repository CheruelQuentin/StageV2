<?php


include_once "modele/bd.formation.inc.php";
$FORM_CODE= NULL;
$FORM_LIBELLE=htmlspecialchars($_POST['FORM_LIBELLE']);

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

if(getAddFormation($FORM_CODE, $FORM_LIBELLE)){
header('Location: ./?action=listeStage');
}

// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des stages";
include "vue/entete.html.php";

include "vue/pied.html.php";
?>