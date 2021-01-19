<div style="text-align:right;padding-bottom:5px;">
</div>
<link rel="stylesheet" type="text/css" href="css/liste.css">
<br>
<center><h2 id="titre">Gestion des inscrits</h2></center><br>

<table class="table">
        <thead>
            <th align="center">Nom Prénom </th>
            <th align="center">Salle</th>
            <th align="center">Créneau</th>
            <th align="center">Formation</th>
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
</tbody></table>