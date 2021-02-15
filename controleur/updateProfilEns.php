<?php

include_once "modele/bd.enseignant.inc.php";
include_once "modele/bd.utilisateur.inc.php";

$ENS_NOM=$_POST['ENS_NOM'];
$ENS_PRENOM=$_POST['ENS_PRENOM'];
$ENS_MAIL=$_POST['ENS_MAIL'];
$ENS_TEL=$_POST['ENS_TEL'];
$ENS_DATENAISS=$_POST['ENS_DATENAISS'];


$ENS_ID=$_SESSION["UTIL_ENS"];
// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

if(getUpdateProfilEns($ENS_NOM, $ENS_PRENOM, $ENS_MAIL, $ENS_TEL, $ENS_DATENAISS,$ENS_ID)){
	$UTIL_MAIL=$_POST['ENS_MAIL'];
	$UTIL_ENS=$_SESSION["UTIL_ENS"];

		getUpdateProfilUtilEns($UTIL_ENS,$UTIL_MAIL);

	header('Location: ./?action=deconnexion');
  	exit();
} else{
	echo "erreur.";
}

?>
