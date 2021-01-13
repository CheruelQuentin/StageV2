
<style type="text/css">
            @import url("css/connexion.css");
</style>

<h1 id="titre">Bienvenue</h1>
<h1 id="titre"><?php echo $_SESSION["UTIL_MAIL"] ?></h1>

<div style="display:table; margin:auto;">
<?php if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ADMIN"){ //Si l'utilisateur est un admin ... ?>

<div style="display: inline-block; vertical-align:top;">
<button id="bouton2" type="button" style="width:300px;" onclick=""> Consultation </button>
<button id="bouton2" type="button" style="width:300px;" onclick="window.location.href='./?action=modifMdp'"> Changer de mot de passe </button>
</div>

<div style="display: inline-block; margin-left:20px;">
<button id="bouton1" type="button" style="width:300px;" onclick="window.location.href='./?action=listeInscription3'"> Gestion des stagiaires </button>
<button id="bouton1" type="button" style="width:300px;" onclick="window.location.href='./?action=listeEleve2'"> Gestion des élèves </button>
<button id="bouton1" type="button" style="width:300px;" onclick="window.location.href='./?action=listeEnseignant'"> Gestion des enseignants </button>
<button id="bouton1" type="button" style="width:300px;" onclick="window.location.href='./?action=listeEtablissement'"> Gestion des établissements </button>
<button id="bouton1" type="button" style="width:300px;" onclick="window.location.href='./?action=listeMatiere'"> Gestion des matières </button>
<button id="bouton1" type="button" style="width:300px;" onclick="window.location.href='./?action=listeFormation'"> Gestion des formations </button>
<button id="bouton1" type="button" style="width:300px;" onclick="window.location.href='./?action=listeStage'"> Gestion des stages </button>
<button id="bouton1" type="button" style="width:300px;" onclick="window.location.href='./?action=listeCreneauPropo'"> Gestion des créneaux </button>
</div>

<?php } else if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ETAB"){ //Si l'utilisateur est un établissement ...  ?>

<button id="bouton1" type="button" style="width:300px;" onclick="window.location.href='./?action=listeInscription'"> Liste des inscrits </button>
<button id="bouton1" type="button" style="width:300px;" onclick="window.location.href='./?action=listeEnseignant'"> Gestion des enseignants </button>
<button id="bouton2" type="button" style="width:300px;" onclick="window.location.href='./?action=modifMdp'"> Changer de mot de passe </button>
<button id="bouton1" type="button" onclick="window.location.href='controleur/creationPDFLycee.php'"> Generer PDF</button>

<?php } else { //Si l'utilisateur est un enseignant ... ?>

<button id="bouton1" type="button" style="width:300px;" onclick="window.location.href='./?action=listeCreneau'"> Gestion proposition de créneau </button>
<button id="bouton1" type="button" style="width:300px;" onclick="window.location.href='./?action=listeInscription2'"> Liste des inscrits </button>
<button id="bouton2" type="button" style="width:300px;" onclick="window.location.href='./?action=modifMdp'"> Changer de mot de passe </button>

<?php } ?>
</div>

