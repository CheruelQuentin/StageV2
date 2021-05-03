<?php

include_once "modele/bd.inscrire.inc.php";
	if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ADMIN"){
$INS_ELE=$_POST['INS_ELE'];
$info2 = getInscrireByEle($INS_ELE);
	for($i=0;$i<sizeof($_POST['choixForm']);$i++){
		$INS_STA=$_POST['choixForm'][$i];
	$info3 = getInscrireByStage($INS_STA);
		if($INS_ELE == $info2['INS_ELE']){
			if($INS_STA == $info3['INS_STA']){
		header('Refresh: 1;./?action=ListeInscrit');
		?><script>alert("Élève déjà inscrit");</script><?php
			}else{
			getUpdateInscrire($INS_ELE, $INS_STA);
			header('Location: ./?action=ListeInscrit');
				 }
		}else{

			getUpdateInscrire($INS_ELE, $INS_STA);
			header('Location: ./?action=ListeInscrit');
		}
	}
		}else if(getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="SADMIN"){
$INS_ELE=$_POST['INS_ELE'];
$info2 = getInscrireByEle($INS_ELE);
	for($i=0;$i<sizeof($_POST['choixForm']);$i++){
		$INS_STA=$_POST['choixForm'][$i];
	$info3 = getInscrireByStage($INS_STA);
		if($INS_ELE == $info2['INS_ELE']){
			if($INS_STA == $info3['INS_STA']){
		header('Refresh: 1;./?action=ListeInscrit');
		?><script>alert("Élève déjà inscrit");</script><?php
			}else{
			getUpdateInscrire($INS_ELE, $INS_STA);
			header('Location: ./?action=ListeInscrit');
				 }

		}else{

			getUpdateInscrire($INS_ELE, $INS_STA);
			header('Location: ./?action=ListeInscrit');
			
		}
	}
		}else if(getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ETAB"){
	$INS_ELE=$_POST['INS_ELE'];
	$info2 = getInscrireByEle($INS_ELE);
for($i=0;$i<sizeof($_POST['choixForm']);$i++){
	$INS_STA=$_POST['choixForm'][$i];
	$info3 = getInscrireByStage($INS_STA);
	if($INS_ELE == $info2['INS_ELE']){
		if($INS_STA == $info3['INS_STA']){
	header('Refresh: 1;./?action=ListeInscrit');
	?><script>alert("Élève déjà inscrit");</script><?php
		}else{
		getUpdateInscrire($INS_ELE, $INS_STA);
		header('Location: ./?action=ListeInscrit');
			 }
	}else{
		getUpdateInscrire($INS_ELE, $INS_STA);
		header('Location: ./?action=ListeInscrit');
	}
}

$titre = "Ajout inscrit";
include "vue/entete.html.php";
include "vue/vueGenModifInscrire.php";
include "vue/pied.html.php";
?>