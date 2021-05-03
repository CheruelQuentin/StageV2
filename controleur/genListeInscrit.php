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
		$listeInscrire = getInscrireListe3();
		$listeFormation=getFormation();
	}else if(getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="SADMIN"){
		$listeInscrire = getInscrireListe3();
		$listeFormation=getFormation();
	}else if(getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ETAB"){
		
		$listeCreneau = getListeCreneau(); 
		$listeInscrire = getInscrireListe($listeCreneau);

	}else{
		$listeInscrire2 = getInscrireListe2();
		$listeCreneau = getListeCreneauEns($_SESSION["UTIL_ENS"]);
	
	}





include "vue/entete.html.php";
include "vue/vueGenListeInscrit.php";
include "vue/pied.html.php";


?>