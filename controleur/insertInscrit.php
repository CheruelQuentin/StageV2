<?php


include_once "modele/bd.inscrire.inc.php";
/*
$INS_ELE=htmlspecialchars($_POST['INS_ELE']);

$info2 = getInscrireByEle($INS_ELE);


for($i=0;$i<sizeof($_POST['choixForm']);$i++){
	$INS_STA=$_POST['choixForm'][$i];
	$info3 = getInscrireByStage($INS_STA);
if($INS_ELE == $info2['INS_ELE']){
	if($INS_STA == $info3['INS_STA']){
	header('Refresh: 1;./?action=listeInscriptionEta');
	?><script>alert("Élève déjà inscrit");</script><?php
	}else{
		getAddInscrire($INS_ELE, $INS_STA);
		header('Location: ./?action=listeInscriptionEta');
			 }
}else{
	getAddInscrire($INS_ELE, $INS_STA);
	header('Location: ./?action=listeInscriptionEta');
	
}
}

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
*/

$INS_ELE=htmlspecialchars($_POST['INS_ELE']);


for($i=0;$i<sizeof($_POST['choixForm']);$i++){
	$INS_STA=$_POST['choixForm'][$i];
	$test=getInscrireByStageByEle($INS_ELE,$INS_STA);
if($test == NULL){
	getAddInscrire($INS_ELE, $INS_STA);
	header('Location: ./?action=listeInscriptionEta');
}else{
	header('Refresh: 1;./?action=listeInscriptionEta');
	?><script>alert("Élève déjà inscrit");</script><?php
}
}






$titre = "Liste des insrits";
include "vue/entete.html.php";

include "vue/pied.html.php";
?>