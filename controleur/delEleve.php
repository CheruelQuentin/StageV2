<?php

include_once "modele/bd.eleve.inc.php";
include_once "modele/bd.inscrire.inc.php";
$ELE_INS=getInscrireByEle($_GET['id']);

for($i=0;$i<sizeof($ELE_INS);$i++){	//Suppression de toutes les formations suivies
	getDelInscrire($_GET['id'],$ELE_INS[$i]['INS_STA']);
}

if(getDelEleve($_GET['id'])){
	header('Location: ./?action=listeEleve2');
  	exit();
} else{
	echo "erreur.";
}
        ?>