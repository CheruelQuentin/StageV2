<div style="text-align:right;padding-bottom:5px;">

<link rel="stylesheet" type="text/css" href="css/liste.css">

<center><h2 id="titre">Gestion des inscrits</h2></center>
<button onclick="window.location.href='./?action=addIns';" id="bouton2" style="display:inline-block;">Ajouter</button></div>
<table class="table">
        <thead>
            <th align="center">Nom Prénom</th>

            <th align="center">Formation</th>
            <th align="center">Modifier</th>
            <th align="center">Supprimer</th>


         </thead>
         <tbody>
<?php
for ($i = 0; $i < count($listeInscrire); $i++) {
    ?>
        <tr>
            <td><center><?= getEleveById($listeInscrire[$i]["INS_ELE"])['ELE_NOM']," ",getEleveById($listeInscrire[$i]["INS_ELE"])['ELE_PRENOM'] ?></center></td>
            <td><center><?= getFormationById(getStageById($listeInscrire[$i]["INS_STA"])['STA_FORM'])['FORM_LIBELLE'] ?></center></td>
            <td><center><button onclick="if(confirm('Voulez-vous vraiment modifier cet élément ?')==true) { window.location.href='./?action=modifIns2&id=<?=$listeInscrire[$i]['INS_ELE']?>'; }" > Modif. </button></center></td>
            <td><center><button onclick="if(confirm('Voulez-vous vraiment supprimer cet élément ?')==true) { window.location.href='./?action=delIns&id=<?=$listeInscrire[$i]['INS_ELE']?>&amp;stage=<?=$listeInscrire[$i]["INS_STA"]?>'; }" > Supp. </button></center></td>

    <?php
}
?>
</tbody></table>