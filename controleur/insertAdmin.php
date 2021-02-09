<?php

include_once "modele/bd.utilisateur.inc.php";
$UTIL_MAIL=htmlspecialchars($_POST['UTIL_MAIL']);
$UTIL_MDP3=htmlspecialchars($_POST['UTIL_MDP3']);
$UTIL_MDP2=htmlspecialchars($_POST['UTIL_MDP2']);
// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
if($UTIL_MDP3 == $UTIL_MDP2){
	$UTIL_MDP == $UTIL_MDP2;
if(addUtiAdmin($UTIL_MAIL, $UTIL_MDP)){


header('Location: ./?action=profil');
// traitement si necessaire des donnees recuperees
}}else{
	header('Location: ./?action=addAdmin');
	
}
// appel du script de vue qui permet de gerer l'affichage des donnees

$titre = "Liste des établissements";
include "vue/entete.html.php";

include "vue/pied.html.php";
?>