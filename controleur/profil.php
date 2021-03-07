<?php

include_once "modele/bd.inscrire.inc.php";
include_once "modele/bd.eleve.inc.php";
include_once "modele/bd.enseignant.inc.php";
include_once "modele/bd.formation.inc.php";
include_once "modele/bd.stage.inc.php";
include_once "modele/bd.creneau.inc.php";
include_once "modele/bd.etablissement.inc.php";
include_once "modele/bd.utilisateur.inc.php";
include_once "modele/bd.matiere.inc.php";




if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ADMIN"){
$listeCreneau = getListeCreneau();
$listeStage= getStageByTout();
	}else if(getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="SADMIN"){
		$listeCreneau = getListeCreneau();
		$listeStage= getStageByTout();
	}else if(getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ETAB"){
		$ETA_NOM =getEtablissementById($_SESSION["UTIL_ETA"]);
		$resultat=getEtablissementProfil($_SESSION["UTIL_ETA"]);
		$listeCreneau = getListeCreneau();

	}else{
		$ens=getEnseignantProfil($_SESSION["UTIL_ENS"]);
		  $listeCreneau = getListeCreneauEns($_SESSION["UTIL_ENS"]);
	}




$titre = "Profil";
include "vue/entete.html.php";
include "vue/vueProfil.php";
include "vue/pied.html.php";


?>