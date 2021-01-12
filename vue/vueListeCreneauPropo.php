<div style="text-align:right;padding-bottom:5px;">

<center><h2 id="titre">Liste de proposition de créneaux </h2></center>
</div>
<link rel="stylesheet" type="text/css" href="css/liste.css">
<table class="table">
        <thead>
            <th align="center">Date</th>
            <th align="center">Heure début</th>
            <th align="center">Heure fin</th>
            <th align="center">Salle</th>
            <th align="center">Mini-stage</th>
            <th align="center">Validez</th>
            <th align="center">Refusez</th>
         </thead>
         <tbody>

<?php
for ($i = 0; $i < count($listeCreneauPropo); $i++) {
    ?>
        <tr>
       <td><center><?= strftime('%d/%m/%Y',strtotime($listeCreneauPropo[$i]["CRE_DATE"])) ?></center></td>
       <td><center><?= $listeCreneauPropo[$i]["CRE_HEUREDEB"] ?></center></td>
       <td><center><?= $listeCreneauPropo[$i]["CRE_HEUREFIN"] ?></center></td>
       <td><center><?= $listeCreneauPropo[$i]["CRE_SALLE"] ?></center></td>
       <td><center><?= $listeCreneauPropo[$i]["STA_LIBELLE"] ?></center></td>
       <td><center><button> Validez </button></center></td>
       <td><center><button onclick="if(confirm('Voulez-vous vraiment supprimer cet élément ?')==true) { window.location.href='./?action=delForm&id=<?=$listeCreneauPropo[$i]['FORM_ID']?>'; }" > Supp. </button></center></td>
        </tr>
    <?php
}
?>
</tbody></table>