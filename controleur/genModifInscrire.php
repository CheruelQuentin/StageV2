<?php

include_once "modele/bd.inscrire.inc.php";
include_once "modele/bd.formation.inc.php";
include_once "modele/bd.creneau.inc.php";
include_once "modele/bd.stage.inc.php";


	if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ADMIN"){
			$listeStage = getStageFormation();
			if (isset($_GET['id'])){
				$idE=$_GET['id'];
				$listeInscrire = getInscrireByEtudiant($idE);
			}
		}else if(getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="SADMIN"){
			$listeStage = getStageFormation();
			if (isset($_GET['id'])){
				$idE=$_GET['id'];
				$listeInscrire = getInscrireByEtudiant($idE);
			}
		}else if(getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ETAB"){
			$listeStage = getStageFormation();
			if (isset($_GET['id'])){
				$idE=$_GET['id'];
				$listeInscrire = getInscrireByEtudiant($idE);
			}
	}

$titre = "Ajout inscrit";
include "vue/entete.html.php";
include "vue/vueGenModifInscrire.php";
include "vue/pied.html.php";
?>