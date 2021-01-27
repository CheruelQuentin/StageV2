<?php

include_once "modele/bd.eleve.inc.php";
include_once "modele/bd.etablissement.inc.php";
include_once "modele/bd.inscrire.inc.php";
function sanitize_string($str) {
	if (get_magic_quotes_gpc()) {
		$sanitize = mysqli_real_escape_string(stripslashes($str));	 
	} else {
		$sanitize = mysqli_real_escape_string($str);	
	} 
	return $sanitize;
}
$ELE_ETA = $_SESSION["UTIL_ETA"];
$ELE_NOM=htmlspecialchars($_POST['ELE_NOM']);
$ELE_PRENOM=htmlspecialchars($_POST['ELE_PRENOM']);
$ELE_DATENAISS=htmlspecialchars($_POST['ELE_DATENAISS']);
$ELE_CLASSE=htmlspecialchars($_POST['ELE_CLASSE']);
$ELE_MAIL=htmlspecialchars($_POST['ELE_MAIL']);

// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 

if(getAddEleve($ELE_ETA, $ELE_NOM, $ELE_PRENOM, $ELE_DATENAISS, $ELE_CLASSE, $ELE_MAIL)){

//Récupération de l'id de l'élève créé
$ELE_ID=getEleveIdByInfo2($ELE_NOM, $ELE_PRENOM, $ELE_CLASSE, $ELE_ETA);
//Ajout des inscriptions aux formations
for($i=0;$i<sizeof($_POST['choixForm']);$i++){
	getAddInscrire($ELE_ID,$_POST['choixForm'][$i]);
}
header('location: ./?action=listeEleve');
  	exit();
}


// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des eleves";
include "vue/entete.html.php";
include "vue/vueInsertEleve.php";
include "vue/pied.html.php";
?>