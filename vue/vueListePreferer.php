<div style="text-align:right;padding-bottom:5px;">
  <center><h2 id="titre">Gestion des créneaux </h2></center>

<button onclick="window.location.href='./?action=addCre';" id="bouton2" style="display:inline-block;">Ajouter</button>
<button onclick="window.location.href='./?action=modifCre';" id="bouton2" style="display:inline-block;">Modifier</button>
<button onclick="window.location.href='./?action=delCre';" id='bouton2' style="display:inline-block;">Supprimer</button>
</div>
<link rel="stylesheet" type="text/css" href="css/liste.css">
<table class="table">
        <thead>
            <th align="center">Créneau</th>
            <th align="center">Enseignant</th>
            <th align="center">Conflit EDT</th>
         </thead>
         <tbody>
<?php
for ($i = 0; $i < count($listePreferer); $i++) {
    ?>
        <tr>
       <td><center><?= getCreneauById($listePreferer[$i]["PREF_CRE"])['CRE_DATE'], " | ",getCreneauById($listePreferer[$i]["PREF_CRE"])['CRE_HEUREDEB']," - ", getCreneauById($listePreferer[$i]["PREF_CRE"])['CRE_HEUREFIN'] ?></center></td>
       <td><center><?= getEnseignantById($listePreferer[$i]["PREF_ENS"])['ENS_NOM'], " ", getEnseignantById($listePreferer[$i]["PREF_ENS"])['ENS_PRENOM']?></center></td>
       <td><center><?php if($listePreferer[$i]["PREF_EDT"]==1){ echo"Conflit";}else{ echo"Pas de conflit";} ?></center></td>

        </tr>
    <?php
}
?>
</tbody></table>