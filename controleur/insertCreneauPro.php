<?php


include_once "modele/bd.creneau.inc.php";
include_once "modele/bd.matiere.inc.php";
include_once "modele/bd.formation.inc.php";
include_once "modele/bd.stage.inc.php";
include_once "modele/bd.enseignant.inc.php";
include_once "modele/bd.preferer.inc.php";


if (isset($_POST['checkCreneau'])){

foreach( $_POST['checkCreneau'] as $checkCreneau){



$cnx = connexionPDO();
$req = $cnx->prepare("update creneau set CRE_VALIDE=1 where CRE_ID=".$checkCreneau);
        $resultat = $req->execute();

}

}




// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "Liste des creneaux";
include "vue/entete.html.php";
include "vue/vueInsertCreneau.php";
include "vue/pied.html.php";
?>