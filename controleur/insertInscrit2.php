<?php


include_once "modele/bd.inscrire.inc.php";

$INS_ELE=htmlspecialchars($_POST['INS_ELE']);
$INS_STA=htmlspecialchars($_POST['INS_STA']);

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

getAddInscrire($INS_ELE, $INS_STA);


// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des insrits";
include "vue/entete.html.php";
include "vue/vueInsertInscrire2.php";
include "vue/pied.html.php";
?>