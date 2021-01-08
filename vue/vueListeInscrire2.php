<div style="text-align:right;padding-bottom:5px;">
</div>
<link rel="stylesheet" type="text/css" href="css/liste.css">

<center><h2 id="titre">Gestion des inscrits</h2></center>

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
            <td><center><?= getCreneauById($listeInscrire2[$i]["CRE_ID"])['CRE_SALLE']?></center></td>
            <td><center><?= getCreneauById($listeInscrire2[$i]["CRE_ID"])['CRE_DATE'], " ",getCreneauById($listeInscrire2[$i]["CRE_ID"])['CRE_DATEDEB'] ?></center></td>
            <td><center><?= getStageById(getFormationById($listeInscrire2[$i]["INS_FORM"])['FORM_STA'])['STA_LIBELLE'] ?></center></td>

    <?php
}
?>
</tbody></table>