<?php

include_once "modele/bd.inscrire.inc.php";


if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ADMIN"){
		$INS_ELE=htmlspecialchars($_POST['INS_ELE']);
		for($i=0;$i<sizeof($_POST['choixForm']);$i++){
			$INS_STA=$_POST['choixForm'][$i];
			$test=getInscrireByStageByEle($INS_ELE,$INS_STA);
			if($test == NULL){
				getAddInscrire($INS_ELE, $INS_STA);
				header('Location: ./?action=ListeInscrit');
			}else{
				header('Refresh: 1;./?action=genAddIns');
				?><script>alert("Élève déjà inscrit");</script><?php
			}
		}
		}else if(getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="SADMIN"){
		$INS_ELE=htmlspecialchars($_POST['INS_ELE']);
		for($i=0;$i<sizeof($_POST['choixForm']);$i++){
			$INS_STA=$_POST['choixForm'][$i];
			$test=getInscrireByStageByEle($INS_ELE,$INS_STA);
			if($test == NULL){
				getAddInscrire($INS_ELE, $INS_STA);
				header('Location: ./?action=ListeInscrit');
			}else{
				header('Refresh: 1;./?action=genAddIns');
				?><script>alert("Élève déjà inscrit");</script><?php
			}
		}
		}else if(getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ETAB"){
		$INS_ELE=htmlspecialchars($_POST['INS_ELE']);
		for($i=0;$i<sizeof($_POST['choixForm']);$i++){
			$INS_STA=$_POST['choixForm'][$i];
			$test=getInscrireByStageByEle($INS_ELE,$INS_STA);
			if($test == NULL){
				getAddInscrire($INS_ELE, $INS_STA);
				header('Location: ./?action=ListeInscrit');
			}else{
				header('Refresh: 1;./?action=ListeInscrit');
				?><script>alert("Élève déjà inscrit");</script><?php
			}
		}
	}

$titre = "Ajout inscrit";
include "vue/entete.html.php";
include "vue/pied.html.php";
?>