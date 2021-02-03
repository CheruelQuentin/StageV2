
<style type="text/css">
            @import url("css/connexion.css");
</style>
<br>
<h1 id="titre">Bienvenue</h1><br>

<div style="display:table; margin:auto;">
<?php if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ADMIN"){ //Si l'utilisateur est un admin ... ?>



<link rel="stylesheet" type="text/css" href="css/liste.css">
           <table class="table">
        <thead>
            <th align="center">Créneau</th>
            <th align="center">Formation</th>
            <th align="center">Matière</th>
            <th align="center">Enseignant</th>
            <th align="center">Salle</th>
            <th align="center">Min. Elèves</th>
            <th align="center">Max. Elèves</th>
         </thead>
         <tbody>
    <?php
for ($i = 0; $i < count($listeStage); $i++) {
    ?>
        <tr>
            <td><center><?= getCreneauById($listeStage[$i]["STA_CRE"])['CRE_DATE'], " | ",getCreneauById($listeStage[$i]["STA_CRE"])['CRE_HEUREDEB']," - ", getCreneauById($listeStage[$i]["STA_CRE"])['CRE_HEUREFIN'] ?></center></td>
            
            <td><center><?= getFormationById($listeStage[$i]["STA_FORM"])['FORM_LIBELLE'] ?></center></td>
            
            <td><center><?= getMatiereById($listeStage[$i]["STA_MAT"])['MAT_LIBELLE'] ?></center></td>
            <td><center><?= getEnseignantById($listeStage[$i]["STA_ENS"])['ENS_NOM'], " ", getEnseignantById($listeStage[$i]["STA_ENS"])['ENS_PRENOM'] ?></center></td>
            <td><center><?= getCreneauById($listeStage[$i]["STA_CRE"])['CRE_SALLE'] ?></center></td>
            <td><center><?= $listeStage[$i]["STA_ELEMIN"] ?></center></td>
            <td><center><?= $listeStage[$i]["STA_ELEMAX"] ?></center></td>

    <?php
}
?>
</tbody></table>        


<?php } else if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ETAB"){ //Si l'utilisateur est un établissement ...  ?>
    <br>
    <link rel="stylesheet" type="text/css" href="css/liste.css">
    <?php  
    if($listeInscrire == null){
        echo('Aucun élève inscrit actuellement dans un mini-stage');
    }else{?>
    
    <center><h1>Liste des inscrits</h1></center>

    <br>
    <table class="table">
        <thead>
            <th align="center">Nom Prénom</th>
            <th align="center">Stage</th>


         </thead>
         <tbody>
<?php
for ($i = 0; $i < count($listeInscrire); $i++) {
    ?>
        <tr>
            <td><center><?= getEleveById($listeInscrire[$i]["INS_ELE"])['ELE_NOM']," ",getEleveById($listeInscrire[$i]["INS_ELE"])['ELE_PRENOM'] ?></center></td>
            <td><center><?= $listeInscrire[$i]['FORM_LIBELLE'] ?></center></td>

    <?php
}
?>
</tbody></table>
<?php
}
?>
<?php } else { //Si l'utilisateur est un enseignant ... ?>
   <br>
   <link rel="stylesheet" type="text/css" href="css/liste.css">
    <center><h1>Liste des inscrits</h1></center>
    <br>
    <table class="table">
        <thead>
            <th align="center">Nom Prénom </th>
            <th align="center">Salle</th>
            <th align="center">Créneau</th>
            <th align="center">Stage</th>
         </thead>
         <tbody>
<?php
for ($i = 0; $i < count($listeInscrire2); $i++) {
    ?>
        <tr>
            <td><center><?= getEleveById($listeInscrire2[$i]["INS_ELE"])['ELE_NOM'], " ",getEleveById($listeInscrire2[$i]["INS_ELE"])['ELE_PRENOM'] ?></center></td>
            <td><center><?= getCreneauById($listeInscrire2[$i]["STA_CRE"])['CRE_SALLE']?></center></td>
            <td><center><?= getCreneauById($listeInscrire2[$i]["STA_CRE"])['CRE_DATE'], " ",getCreneauById($listeInscrire2[$i]["STA_CRE"])['CRE_HEUREDEB'] ?></center></td>
            <td><center><?= getFormationById(getStageById($listeInscrire2[$i]["INS_STA"])['STA_FORM'])['FORM_LIBELLE'] ?></center></td>

    <?php
}
?>

<?php } ?>
</tbody></table>
</div>

