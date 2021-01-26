<div style="text-align:right;padding-bottom:5px;"><br>
    <center><h2 id="titre">Gestion des stages</h2></center><br>


</div>
<link rel="stylesheet" type="text/css" href="css/liste.css">
<table class="table">
        <thead>
            <th align="center">Créneau</th>
            <th align="center">Formation</th>
            <th align="center">Matière</th>
            <th align="center">Enseignant</th>
            <th align="center">Min. Elèves</th>
            <th align="center">Max. Elèves</th>
            <th align="center">Supprimer</th>
            <th align="center">Modifier</th>
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
            <td><center><?= $listeStage[$i]["STA_ELEMIN"] ?></center></td>
            <td><center><?= $listeStage[$i]["STA_ELEMAX"] ?></center></td>
            <td><center><button onclick="if(confirm('Voulez-vous vraiment supprimer cet élément ?')==true) { window.location.href='./?action=delForm&id=<?=$listeStage[$i]['STA_ID']?>'; }" > Supp. </button></center></td>
            <td><center><button onclick="if(confirm('Voulez-vous vraiment modifier cet élément ?')==true) { window.location.href='./?action=modifForm&id=<?=$listeStage[$i]['STA_ID']?>'; }" > Modif. </button></center></td>

    <?php
}
?>
</tbody></table>