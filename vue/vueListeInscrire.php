<div style="text-align:right;padding-bottom:5px;">
</div>
<link rel="stylesheet" type="text/css" href="css/liste.css">

<center><h2 id="titre">Gestion des inscrits</h2></center>

<table class="table">
        <thead>
            <th align="center">Nom Prénom</th>
            <th align="center">Etablissement</th>
            <th align="center">Stage</th>

         </thead>
         <tbody>
<?php
for ($i = 0; $i < count($listeInscrire); $i++) {
    ?>
        <tr>
            <td><center><?= getEleveById($listeInscrire[$i]["INS_ELE"])['ELE_NOM']," ",getEleveById($listeInscrire[$i]["INS_ELE"])['ELE_PRENOM'] ?></center></td>
            <td><center><?= getEtablissementById(getEleveById($listeInscrire[$i]["INS_ELE"])['ELE_ETA'])['ETA_NOM'] ?></center></td>
            <td><center><?= getStageById(getFormationById($listeInscrire[$i]["INS_FORM"])['FORM_STA'])['STA_LIBELLE'] ?></center></td>

    <?php
}
?>
</tbody></table>