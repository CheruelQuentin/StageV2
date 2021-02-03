<?php


include_once "modele/bd.eleve.inc.php";
include_once "modele/bd.inscrire.inc.php";


$ELE_ETA=$_POST['ELE_ETA'];
$ELE_NOM=$_POST['ELE_NOM'];
$ELE_PRENOM=$_POST['ELE_PRENOM'];
$ELE_DATENAISS=$_POST['ELE_DATENAISS'];
$ELE_CLASSE=$_POST['ELE_CLASSE'];
$ELE_MAIL=$_POST['ELE_MAIL'];
$ELE_ID=$_POST['ELE_ID'];

$ELE_INS=getInscrireByEle($ELE_ID);

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

if(getUpdateEleve($ELE_ETA, $ELE_NOM, $ELE_PRENOM, $ELE_DATENAISS, $ELE_CLASSE, $ELE_MAIL,$ELE_ID)){

	for($i=0;$i<sizeof($ELE_INS);$i++){	//Suppression de toutes les formations suivies
	getDelInscrire($ELE_ID,$ELE_INS[$i]['INS_STA']);
}

	for($i=0;$i<sizeof($_POST['choixForm']);$i++){ //Ajout des formations cochées
	getAddInscrire($ELE_ID,$_POST['choixForm'][$i]);
}
	
	header('Location: ./?action=listeEleve');
	
  	exit();
} else{
	echo "erreur.";
}

// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "eleve";
include "vue/entete.html.php";
include "vue/pied.html.php";
?>