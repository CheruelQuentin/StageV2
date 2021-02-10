<div style="text-align:right;padding-bottom:5px;"><br>
    <center><h2 id="titre">Gestion des ministages</h2></center><br>


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
            <th align="center">Modifier</th>
            <th align="center">Supprimer</th>
            
         </thead>
         <tbody>
<?php
for ($i = 0; $i < count($listeStage); $i++) {
    ?>
        <tr>
            <td><center><?= strftime('%d/%m/%Y',strtotime($listeStage[$i]["CRE_DATE"])), " | ",$listeStage[$i]["CRE_HEUREDEB"]," - ", $listeStage[$i]["CRE_HEUREFIN"] ?></center></td>
            
            <td><center><?= $listeStage[$i]["FORM_LIBELLE"] ?></center></td>
            
            <td><center><?= $listeStage[$i]["MAT_LIBELLE"] ?></center></td>
            <td><center><?= $listeStage[$i]["ENS_NOM"], " ",$listeStage[$i]["ENS_PRENOM"] ?></center></td>
            <td><center><?= $listeStage[$i]["STA_ELEMIN"] ?></center></td>
            <td><center><?= $listeStage[$i]["STA_ELEMAX"] ?></center></td>
            <td><center><button onclick="if(confirm('Voulez-vous vraiment modifier cet élément ?')==true) { window.location.href='./?action=modifForm&id=<?=$listeStage[$i]['STA_ID']?>'; }" > ✍ </button></center></td>
            <td><center><button onclick="if(confirm('Voulez-vous vraiment supprimer cet élément ?')==true) { window.location.href='./?action=delForm&id=<?=$listeStage[$i]['STA_ID']?>'; }" > ❌ </button></center></td>
            

    <?php
}
?>
</tbody></table>