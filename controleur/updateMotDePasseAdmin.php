<?php


include_once "modele/bd.utilisateur.inc.php";
$UTIL_MAIL=$_POST['UTIL_MAIL'];
$UTIL_MDP=$_POST['UTIL_MDP2'];
$UTIL_MDP3=$_POST['UTIL_MDP3'];
if($UTIL_MDP == $UTIL_MDP3){
getUpdateUtiMdp($UTIL_MAIL,$UTIL_MDP);

header('Refresh: 1;./?action=profil');
?><script>alert("Mot de passe modifier, vous allez être redirigé");</script><?php
}else{
	header('Location: ./?action=modifMdpAdmin');
}

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 



// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Nouveau mot de passe";
include "vue/entete.html.php";

include "vue/pied.html.php";
?>