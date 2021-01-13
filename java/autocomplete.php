<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="https://jqueryui.com/resources/demos/style.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<?php 
include_once "modele/bd.eleve.inc.php";
include_once "modele/bd.enseignant.inc.php";
include_once "modele/bd.matiere.inc.php";
include_once "modele/bd.stage.inc.php";
include_once "modele/bd.creneau.inc.php";
include_once "modele/bd.etablissement.inc.php";
$listeEleve = getEleve();
$listeEnseignant = getEnseignant();
$listeMatiere = getMatiere();
$listeStage = getStage();
$listeCreneau = getCreneau();
$listeEtablissement = getEtablissement();
?>

<script type="text/javascript">
  $( function() {
    var availableEleves = [
    <?php  for ($i = 0; $i < count($listeEleve); $i++) {
               echo '"'.$listeEleve[$i]['ELE_NOM'].' - '.$listeEleve[$i]['ELE_PRENOM'].' - '.$listeEleve[$i]['ELE_CLASSE'].'"';
      if ($i < count($listeEleve)-1){ echo ","; }
            } ?>
    ];
    
    var availableEnseignants = [
    <?php  for ($i = 0; $i < count($listeEnseignant); $i++) {
               echo '"'.$listeEnseignant[$i]['ENS_NOM'].' - '.$listeEnseignant[$i]['ENS_PRENOM'].' - '.$listeEnseignant[$i]['ENS_MAIL'].'"';
      if ($i < count($listeEnseignant)-1){ echo ","; }
            } ?>
    ];

    var availableMatieres = [
    <?php  for ($i = 0; $i < count($listeMatiere); $i++) {
               echo '"'.$listeMatiere[$i]['MAT_LIBELLE'].'"';
      if ($i < count($listeMatiere)-1){ echo ","; }
            } ?>
    ];

    var availableStages = [
    <?php  for ($i = 0; $i < count($listeStage); $i++) {
               echo '"'.$listeStage[$i]['FORM_LIBELLE'].'"';
      if ($i < count($listeStage)-1){ echo ","; }
            } ?>
    ];

    var availableCreneaux = [
    <?php  for ($i = 0; $i < count($listeCreneau); $i++) {
               echo '"'.$listeCreneau[$i]['CRE_DATE'].' - '.$listeCreneau[$i]['CRE_SALLE'].' - '.$listeCreneau[$i]['CRE_HEUREDEB'].' - '.$listeCreneau[$i]['CRE_HEUREFIN'].'"';
      if ($i < count($listeCreneau)-1){ echo ","; }
            } ?>
    ];

    var availableEtablissements = [
    <?php  for ($i = 0; $i < count($listeEtablissement); $i++) {
               echo '"'.$listeEtablissement[$i]['ETA_NOM'].' - '.$listeEtablissement[$i]['ETA_VILLE'].'"';
      if ($i < count($listeEtablissement)-1){ echo ","; }
            } ?>
    ];
	 
	
    $( "#eleves" ).autocomplete({
      source: availableEleves
    });

    $( "#enseignants" ).autocomplete({
      source: availableEnseignants
    });

    $( "#matieres" ).autocomplete({
      source: availableMatieres
    });

    $( "#stages" ).autocomplete({
      source: availableStages
    });

    $( "#creneaux" ).autocomplete({
      source: availableCreneaux
    });

    $( "#etablissements" ).autocomplete({
      source: availableEtablissements
    });

  } );
</script>