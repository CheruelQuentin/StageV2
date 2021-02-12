<div style="text-align:right;padding-bottom:5px;">

<br><center><h2 id="titre">Liste de proposition de créneaux </h2></center><br>
</div>
<link rel="stylesheet" type="text/css" href="css/liste.css">
<form action="./?action=updateCreneauPro" method="post">
<table class="table">
        <thead>
          <th align="center">Formation</th>
            <th align="center">Date</th>
            <th align="center">Date de fin</th>
            <th align="center">Heure début</th>
            <th align="center">Heure fin</th>
            <th align="center">Salle</th>
            <th align="center">Validé</th>
            <th align="center">Refusé</th>
         </thead>
         <tbody>

<?php

for ($i = 0; $i < count($listeCreneauPropo); $i++) {
    ?>
        <tr><td>
       <center><?= $listeCreneauPropo[$i]["FORM_LIBELLE"] ?></center></td>
       <td><center><?= strftime('%d/%m/%Y',strtotime($listeCreneauPropo[$i]["CRE_DATE"])) ?></center></td>
       <td><center><?= strftime('%d/%m/%Y',strtotime($listeCreneauPropo[$i]["CRE_DATEFIN"])) ?></center></td>
       <td><center><?= $listeCreneauPropo[$i]["CRE_HEUREDEB"] ?></center></td>
       <td><center><?= $listeCreneauPropo[$i]["CRE_HEUREFIN"] ?></center></td>
       <td><center><?= $listeCreneauPropo[$i]["CRE_SALLE"] ?></center></td>
       <td><input type="checkbox" name="checkCreneau[]" value="<?php echo $listeCreneauPropo[$i]["CRE_ID"]; ?>"></td>
       <td><center><button onclick="if(confirm('Voulez-vous vraiment supprimer cet élément ?')==true) { window.location.href='./?action=delForm&id=<?=$listeCreneauPropo[$i]['STA_ID']?>'; }" > ❌ </button></center></td>
        </tr>
    <?php
}
?>

</tbody></table>
<br><center><input type="submit" value="Valider" name="sub"></center>
</form>
