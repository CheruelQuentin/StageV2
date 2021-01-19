<div style="text-align:right;padding-bottom:5px;"><br>
  <center><h2 id="titre">Gestion des Formations</h2></center>

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
for ($i = 0; $i < count($listeFormation); $i++) {
    ?>
        <tr>
       <td><center><?= $listeFormation[$i]["FORM_LIBELLE"] ?></center></td>
       <td><center><button onclick="if(confirm('Voulez-vous vraiment supprimer cet élément ?')==true) { window.location.href='./?action=delSta&id=<?=$listeFormation[$i]['FORM_CODE']?>'; }" > Supp. </button></center></td>
       <td><center><button onclick="if(confirm('Voulez-vous vraiment modifier cet élément ?')==true) { window.location.href='./?action=modifSta&id=<?=$listeFormation[$i]['FORM_CODE']?>'; }" > Modifier </button></center></td>
        </tr>
    <?php
}
?>
</tbody></table>