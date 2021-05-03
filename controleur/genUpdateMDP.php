<?php

include_once "modele/bd.utilisateur.inc.php";

if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ADMIN"){
			$UTIL_MAIL=$_POST['UTIL_MAIL'];
			$UTIL_MDP=$_POST['UTIL_MDP2'];
			$UTIL_MDP3=$_POST['UTIL_MDP3'];
			if($UTIL_MDP == $UTIL_MDP3){
				getUpdateUtiMdp($UTIL_MAIL,$UTIL_MDP);
				header('Refresh: 0.1;./?action=profil');
				?><script>alert("Mot de passe modifier, vous allez être redirigé");</script><?php
			}else{
				header('Location: ./?action=genModifMDP');
			}
		}else if(getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="SADMIN"){
			$UTIL_MAIL=$_POST['UTIL_MAIL'];
			$UTIL_MDP=$_POST['UTIL_MDP2'];
			$UTIL_MDP3=$_POST['UTIL_MDP3'];
			if($UTIL_MDP == $UTIL_MDP3){
				getUpdateUtiMdp($UTIL_MAIL,$UTIL_MDP);
				header('Refresh: 0.1;./?action=profil');
				?><script>alert("Mot de passe modifier, vous allez être redirigé");</script><?php
			}else{
				header('Location: ./?action=genModifMDP');
			}
		}else if(getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ETAB"){
			$UTIL_ETA=$_SESSION['UTIL_ETA'];
			$UTIL_MDP=$_POST['UTIL_MDP2'];
			$UTIL_MDP3=$_POST['UTIL_MDP3'];
			if($UTIL_MDP == $UTIL_MDP3){
			    getUpdateUtiMdpEtablissement($UTIL_ETA,$UTIL_MDP);
			header('Refresh: 2;./?action=profil');
			?><script>alert("Mot de passe modifier, vous allez être redirigé");</script><?php

			}else{
				header('Location: ./?action=genModifMDP');
			    
			}
		}else if(getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ENS"){
		
$UTIL_ENS=$_SESSION['UTIL_ENS'];
$UTIL_MDP=$_POST['UTIL_MDP2'];
$UTIL_MDP3=$_POST['UTIL_MDP3'];
if($UTIL_MDP == $UTIL_MDP3){
    getUpdateUtiMdpEnseignant($UTIL_ENS,$UTIL_MDP);
header('Refresh: 2;./?action=profil');
?><script>alert("Mot de passe modifier, vous allez être redirigé");</script><?php
}else{
	header('Location: ./?action=genModifMDP');

}

	}



$titre = "Ajout inscrit";
include "vue/entete.html.php";
include "vue/vueGenModifInscrire.php";
include "vue/pied.html.php";
?>