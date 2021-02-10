<?php


include_once "modele/bd.etablissement.inc.php";
include_once "modele/bd.utilisateur.inc.php";
$ETA_NOM=htmlspecialchars($_POST['ETA_NOM']);
$ETA_VILLE=htmlspecialchars($_POST['ETA_VILLE']);
$ETA_ADRESSE=htmlspecialchars($_POST['ETA_ADRESSE']);
$ETA_CP=htmlspecialchars($_POST['ETA_CP']);
$ETA_MAIL=htmlspecialchars($_POST['ETA_MAIL']);
$ETA_PROVCIVIL=htmlspecialchars($_POST['ETA_PROVCIVIL']);
$ETA_PROVNOM=htmlspecialchars($_POST['ETA_PROVNOM']);
$ETA_PROVPRENOM=htmlspecialchars($_POST['ETA_PROVPRENOM']);
$ETA_TEL=htmlspecialchars($_POST['ETA_TEL']);
$ETA_SECU=htmlspecialchars($_POST['ETA_SECU']);
$ETA_NOMSECU=htmlspecialchars($_POST['ETA_NOMSECU']);
$ETA_CATEG=htmlspecialchars($_POST['ETA_CATEG']);
$ETA_MDP=htmlspecialchars($_POST['ETA_MDP']);
$ETA_MDP2=htmlspecialchars($_POST['ETA_MDP2']);
// appel des fonctions permettant de recuperer les donnees utiles a l'affichage 
$UTIL_MAIL=getUtilisateursMail($ETA_MAIL);

$info=getEtablissementByMail($ETA_MAIL);




		if($ETA_MAIL != $info['ETA_MAIL']){


			if(getAddEtablissement($ETA_NOM, $ETA_VILLE, $ETA_ADRESSE, $ETA_CP, $ETA_MAIL, $ETA_PROVCIVIL, $ETA_PROVNOM, $ETA_PROVPRENOM, $ETA_TEL, $ETA_SECU, $ETA_NOMSECU,$ETA_CATEG)){

					$ETA_ID = getEtablissementIdByInfo($ETA_NOM,$ETA_VILLE,$ETA_CP,$ETA_MAIL);

					addUtiEtablissement($ETA_MAIL, $ETA_MDP,$ETA_ID);
					header('Location: ./?action=defaut');

															}
							}else{

							header('Refresh: 15;./?action=addEta');
							?><script>alert("Adresse mail déjà existante");</script><?php

						}


$titre = "Liste des établissements";
include "vue/entete.html.php";

include "vue/pied.html.php";
?>