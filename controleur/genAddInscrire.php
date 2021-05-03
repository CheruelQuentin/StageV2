<?php

include_once "modele/bd.inscrire.inc.php";
include_once "modele/bd.formation.inc.php";
include_once "modele/bd.stage.inc.php";
include_once "modele/bd.creneau.inc.php";
include_once "modele/bd.matiere.inc.php";
include_once "modele/bd.eleve.inc.php";


if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ADMIN"){
		$eleves=getEleve3(); 
		$stage=getStageByTout();
		$inscrit=getPlace($stage);

		}else if(getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="SADMIN"){
		$eleves=getEleve3(); 
		$stage=getStageByTout();
		$inscrit=getPlace($stage);
		
		}else if(getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ETAB"){
		$eleves=getEleveByEtab(); 
		$stage=getStageByTout();
		$inscrit=getPlace($stage);
	}

$titre = "Ajout inscrit";
include "vue/entete.html.php";
include "vue/vueGenAddInscrire.php";
include "vue/pied.html.php";
?>