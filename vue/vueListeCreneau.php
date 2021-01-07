<div style="text-align:right;padding-bottom:5px;">

<center><h2 id="titre">Liste des créneaux </h2></center>


<button onclick="window.location.href='./?action=addCre';" id="bouton2" style="display:inline-block;">Ajouter</button>
</div>
<link rel="stylesheet" type="text/css" href="css/liste.css">
<table class="table">
        <thead>
            <th align="center">Date</th>
            <th align="center">Heure début</th>
            <th align="center">Heure fin</th>
            <th align="center">Salle</th>
            <th align="center">Matière</th>
            <th align="center">Supprimer</th>
         </thead>
         <tbody>
<?php
for ($i = 0; $i < count($listeCreneau); $i++) {
    ?>
        <tr>
       <td><center><?= strftime('%d/%m/%Y',strtotime($listeCreneau[$i]["CRE_DATE"])) ?></center></td>
       <td><center><?= $listeCreneau[$i]["CRE_HEUREDEB"] ?></center></td>
       <td><center><?= $listeCreneau[$i]["CRE_HEUREFIN"] ?></center></td>
       <td><center><?= $listeCreneau[$i]["CRE_SALLE"] ?></center></td>
       <td><center><?= getMatiereById($listeCreneau[$i]["CRE_MAT"])['MAT_LIBELLE'] ?></center></td>
       <td><center><button onclick="if(confirm('Voulez-vous vraiment supprimer cet élément ?')==true) { window.location.href='./?action=delCre&id=<?=$listeCreneau[$i]['CRE_ID']?>'; }" > Supp. </button></center></td>
        </tr>
    <?php
}
?>
</tbody></table>