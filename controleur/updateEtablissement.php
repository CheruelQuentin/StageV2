<?php

include_once "modele/bd.etablissement.inc.php";


$ETA_NOM=$_POST['ETA_NOM'];
$ETA_VILLE=$_POST['ETA_VILLE'];
$ETA_ADRESSE=$_POST['ETA_ADRESSE'];
$ETA_CP=$_POST['ETA_CP'];
$ETA_MAIL=$_POST['ETA_MAIL'];
$ETA_PROVCIVIL=$_POST['ETA_PROVCIVIL'];
$ETA_PROVNOM=$_POST['ETA_PROVNOM'];
$ETA_PROVPRENOM=$_POST['ETA_PROVPRENOM'];
$ETA_TEL=$_POST['ETA_TEL'];
$ETA_ID=$_POST['ETA_ID'];
// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

if(getUpdateEtablissement($ETA_NOM,$ETA_VILLE,$ETA_ADRESSE,$ETA_CP,$ETA_MAIL,$ETA_PROVCIVIL,$ETA_PROVNOM,$ETA_PROVPRENOM,$ETA_TEL, $ETA_ID)){
	header('Location: ./?action=listeEtablissement');
  	exit();
} else{
	echo "erreur.";
}

?>