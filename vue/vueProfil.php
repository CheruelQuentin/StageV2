
<style type="text/css">
            @import url("css/connexion.css");
</style>
<br>
<h1 id="titre">Bienvenue</h1>
<h1 id="titre"><?php echo $_SESSION["UTIL_MAIL"] ?></h1>

<div style="display:table; margin:auto;">
<?php if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ADMIN"){ //Si l'utilisateur est un admin ... ?>



<?php } else if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ETAB"){ //Si l'utilisateur est un établissement ...  ?>
    <br>
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


<?php } else { //Si l'utilisateur est un enseignant ... ?>
   <br>
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
for ($i = 0; $i < count($listeInscrire); $i++) {
    ?>
        <tr>
            <td><center><?= getEleveById($listeInscrire[$i]["INS_ELE"])['ELE_NOM'], " ",getEleveById($listeInscrire[$i]["INS_ELE"])['ELE_PRENOM'] ?></center></td>
            <td><center><?= getCreneauById($listeInscrire[$i]["STA_CRE"])['CRE_SALLE']?></center></td>
            <td><center><?= getCreneauById($listeInscrire[$i]["STA_CRE"])['CRE_DATE'], " ",getCreneauById($listeInscrire[$i]["STA_CRE"])['CRE_HEUREDEB'] ?></center></td>
            <td><center><?= getFormationById(getStageById($listeInscrire[$i]["INS_STA"])['STA_FORM'])['FORM_LIBELLE'] ?></center></td>

    <?php
}
?>

<?php } ?>
</tbody></table>
</div>

