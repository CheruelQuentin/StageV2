<div style="text-align:right;padding-bottom:5px;">
</div>
<link rel="stylesheet" type="text/css" href="css/liste.css">
<table class="table">
        <thead>
            <th align="center">Nom Prénom</th>
            <th align="center">Etablissement</th>
            <th align="center">Stage</th>
            <th align="center">Supprimer</th>
            <th align="center">Modifier</th>
         </thead>
         <tbody>
<?php
for ($i = 0; $i < count($listeInscrire); $i++) {
    ?>
        <tr>
            <td><center><?= getEleveById($listeInscrire[$i]["INS_ELE"])['ELE_NOM']," ",getEleveById($listeInscrire[$i]["INS_ELE"])['ELE_PRENOM'] ?></center></td>
            <td><center><?= getEtablissementById(getEleveById($listeInscrire[$i]["INS_ELE"])['ELE_ETA'])['ETA_NOM'] ?></center></td>
            <td><center><?= getStageById(getFormationById($listeInscrire[$i]["INS_FORM"])['FORM_STA'])['STA_LIBELLE'] ?></center></td>
            <td><center><button onclick="if(confirm('Voulez-vous vraiment supprimer cet élément ?')==true) { window.location.href='./?action=delIns&idEle=<?=$listeInscrire[$i]['INS_ELE']?>&idForm=<?=$listeInscrire[$i]['INS_FORM']?>'; }" > Supp. </button></center></td>
            <td><center><button onclick="if(confirm('Voulez-vous vraiment modifier cet élément ?')==true) { window.location.href='./?action=modifIns&idEle=<?=$listeInscrire[$i]['INS_ELE']?>&idForm=<?=$listeInscrire[$i]['INS_FORM']?>'; }" > Modif. </button></center></td>

    <?php
}
?>
</tbody></table>