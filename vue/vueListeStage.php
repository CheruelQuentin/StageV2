<div style="text-align:right;padding-bottom:5px;">
<button onclick="window.location.href='./?action=addSta';" id="bouton2" style="display:inline-block;">Ajouter</button>
</div>
<link rel="stylesheet" type="text/css" href="css/liste.css">
<table class="table">
        <thead>
            <th align="center">Libellé</th>
            <th align="center">Supprimer</th>
            <th align="center">Modifier</th>
         </thead>
         <tbody>
<?php
for ($i = 0; $i < count($listeStage); $i++) {
    ?>
        <tr>
       <td><center><?= $listeStage[$i]["STA_LIBELLE"] ?></center></td>
       <td><center><button onclick="if(confirm('Voulez-vous vraiment supprimer cet élément ?')==true) { window.location.href='./?action=delSta&id=<?=$listeStage[$i]['STA_CODE']?>'; }" > Supp. </button></center></td>
       <td><center><button onclick="if(confirm('Voulez-vous vraiment modifier cet élément ?')==true) { window.location.href='./?action=modifSta&id=<?=$listeStage[$i]['STA_CODE']?>'; }" > Modifier </button></center></td>
        </tr>
    <?php
}
?>
</tbody></table>