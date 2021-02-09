<div style="text-align:right;padding-bottom:5px;"><br>
 <center><h2 id="titre">Gestion des matières</h2></center>

<button onclick="window.location.href='./?action=addMat';" id="bouton2" style="display:inline-block;">Ajouter</button>
</div>
<link rel="stylesheet" type="text/css" href="css/liste.css">
<table class="table">
        <thead>
            <th align="center">Libellé Matière</th>
            <th align="center">Modifier</th>
            <th align="center">Supprimer</th>
            
         </thead>
         <tbody>
<?php
for ($i = 0; $i < count($listeMatiere); $i++) {
    ?>
        <tr>
       <td><center><?= $listeMatiere[$i]["MAT_LIBELLE"] ?></center></td>
       <td><center><button onclick="if(confirm('Voulez-vous vraiment modifier cet élément ?')==true) { window.location.href='./?action=modifMat&id=<?=$listeMatiere[$i]['MAT_CODE']?>'; }" > Modif. </button></center></td>
       <td><center><button onclick="if(confirm('Voulez-vous vraiment supprimer cet élément ?')==true) { window.location.href='./?action=delMat&id=<?=$listeMatiere[$i]['MAT_CODE']?>'; }" > ❌ </button></center></td>
       
        </tr>
    <?php
}
?>
</tbody></table>