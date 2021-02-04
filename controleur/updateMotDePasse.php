<?php


include_once "modele/bd.utilisateur.inc.php";

$UTIL_ETA=$_SESSION['UTIL_ETA'];
$UTIL_MDP=$_POST['UTIL_MDP2'];
$UTIL_MDP3=$_POST['UTIL_MDP3'];
if($UTIL_MDP == $UTIL_MDP3){
    getUpdateUtiMdpEtablissement($UTIL_ETA,$UTIL_MDP);
header('Location: ./?action=profil');
}else{
	header('Location: ./?action=modifMdpEtablissement');
    
}



// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 



// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Nouveau mot de passe";
include "vue/entete.html.php";
include "vue/vueUpdateMdp.php";
include "vue/pied.html.php";
?>