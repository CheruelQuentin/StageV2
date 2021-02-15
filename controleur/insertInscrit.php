<?php


include_once "modele/bd.inscrire.inc.php";
$info = getInscrire();
$INS_ELE=htmlspecialchars($_POST['INS_ELE']);

for($i=0;$i<sizeof($_POST['choixForm']);$i++){
	$INS_STA=$_POST['choixForm'][$i];
if($info == $INS_ELE && $info == $INS_STA){
	getAddInscrire($INS_ELE, $INS_STA);
	header('Location: ./?action=listeInscriptionEta');
}else{
	header('Refresh: 1;./?action=addIns');
							?><script>alert("Élève déjà inscript");</script><?php
}
}

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 



$titre = "Liste des insrits";
include "vue/entete.html.php";

include "vue/pied.html.php";
?>