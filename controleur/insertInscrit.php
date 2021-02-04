<?php


include_once "modele/bd.inscrire.inc.php";

$INS_ELE=htmlspecialchars($_POST['INS_ELE']);
$INS_STA=htmlspecialchars($_POST['INS_STA']);

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
if(getAddInscrire($INS_ELE, $INS_STA)){
header('Location: ./?action=listeInscription');
  	exit();
}



// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des insrits";
include "vue/entete.html.php";
include "vue/vueInsertInscrire.php";
include "vue/pied.html.php";
?>