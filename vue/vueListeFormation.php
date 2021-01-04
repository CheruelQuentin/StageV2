<div style="text-align:right;padding-bottom:5px;">
<button onclick="window.location.href='./?action=addForm';" id="bouton2" style="display:inline-block;">Ajouter</button>
</div>
<link rel="stylesheet" type="text/css" href="css/liste.css">
<table class="table">
        <thead>
            <th align="center">Créneau</th>
            <th align="center">Stage</th>
            <th align="center">Matière</th>
            <th align="center">Enseignant</th>
            <th align="center">Min. Elèves</th>
            <th align="center">Max. Elèves</th>
            <th align="center">Supprimer</th>
            <th align="center">Modifier</th>
         </thead>
         <tbody>
<?php
for ($i = 0; $i < count($listeFormation); $i++) {
    ?>
        <tr>
            <td><center><?= getCreneauById($listeFormation[$i]["FORM_CRE"])['CRE_DATE'], " | ",getCreneauById($listeFormation[$i]["FORM_CRE"])['CRE_HEUREDEB']," - ", getCreneauById($listeFormation[$i]["FORM_CRE"])['CRE_HEUREFIN'] ?></center></td>
            <td><center><?= getStageById($listeFormation[$i]["FORM_STA"])['STA_LIBELLE'] ?></center></td>
            <td><center><?= getMatiereById($listeFormation[$i]["FORM_MAT"])['MAT_LIBELLE'] ?></center></td>
            <td><center><?= getEnseignantById($listeFormation[$i]["FORM_ENS"])['ENS_NOM'], " ", getEnseignantById($listeFormation[$i]["FORM_ENS"])['ENS_PRENOM'] ?></center></td>
            <td><center><?= $listeFormation[$i]["FORM_ELEMIN"] ?></center></td>
            <td><center><?= $listeFormation[$i]["FORM_ELEMAX"] ?></center></td>
            <td><center><button onclick="if(confirm('Voulez-vous vraiment supprimer cet élément ?')==true) { window.location.href='./?action=delForm&id=<?=$listeFormation[$i]['FORM_ID']?>'; }" > Supp. </button></center></td>
            <td><center><button onclick="if(confirm('Voulez-vous vraiment modifier cet élément ?')==true) { window.location.href='./?action=modifForm&id=<?=$listeFormation[$i]['FORM_ID']?>'; }" > Modif. </button></center></td>

    <?php
}
?>
</tbody></table>