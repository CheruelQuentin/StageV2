<?php


include_once "modele/bd.inscrire.inc.php";




$INS_ELE=$_POST['INS_ELE'];
// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
for($i=0;$i<sizeof($_POST['choixForm']);$i++){
	$INS_STA=$_POST['choixForm'][$i];
}
if(getUpdateInscrire($INS_ELE, $INS_STA)){

	header('Location: ./?action=listeInscription');
  	exit();
} else{
	echo "erreur.";
}


// traitement si necessaire des donnees recuperees

// appel du script de vue qui permet de gerer l'affichage des donnees

?>