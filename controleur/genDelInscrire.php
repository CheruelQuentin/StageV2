<?php

include_once "modele/bd.inscrire.inc.php";


if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ADMIN"){
			if(getDelInscrire($_GET['id'],$_GET['stage'])){
				header('Location: ./?action=ListeInscrit');
			  	exit();
				}else{
				echo "erreur.";
			}

		}else if(getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="SADMIN"){
		if(getDelInscrire($_GET['id'],$_GET['stage'])){
				header('Location: ./?action=ListeInscrit');
			  	exit();
				}else{
				echo "erreur.";
			}
		}else if(getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ETAB"){
			if(getDelInscrire($_GET['id'],$_GET['stage'])){
				header('Location: ./?action=ListeInscrit');
			  	exit();
			}else{
				echo "erreur.";
			}
	}

$titre = "Ajout inscrit";
include "vue/entete.html.php";
include "vue/pied.html.php";
?>