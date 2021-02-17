<?php


include_once "modele/bd.inscrire.inc.php";
$INS_ELE=htmlspecialchars($_POST['INS_ELE']);


for($i=0;$i<sizeof($_POST['choixForm']);$i++){
	$INS_STA=$_POST['choixForm'][$i];
	$test=getInscrireByStageByEle($INS_ELE,$INS_STA);
if($test == NULL){
	getAddInscrire($INS_ELE, $INS_STA);
	header('Location: ./?action=listeInscriptionAdm');
}else{
	header('Refresh: 1;./?action=addInsAdm');
	?><script>alert("Élève déjà inscrit");</script><?php
}
}


// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 



$titre = "Liste des insrits";
include "vue/entete.html.php";

include "vue/pied.html.php";
?>