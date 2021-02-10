<div style="text-align:right;padding-bottom:5px;">

<link rel="stylesheet" type="text/css" href="css/liste.css">
<br>
<center><h2 id="titre">Gestion des inscrits</h2></center>
<button onclick="window.location.href='./?action=addIns2';" id="bouton2" style="display:inline-block;">Ajouter</button></div>
<table class="table">
        <thead>
            <th align="center">Nom</th>
            <th align="center">Prénom</th>
            <th align="center">Etablissement</th>
            <th align="center">Formation</th>
            <th align="center">Modifier</th>
            <th align="center">Supprimer</th>


         </thead>
         <tbody>
<?php
for ($i = 0; $i < count($listeInscrire); $i++) {
    ?>
        <tr>
            <td><center><?= $listeInscrire[$i]['ELE_NOM'] ?></center></td>
            <td><center><?= $listeInscrire[$i]['ELE_PRENOM'] ?></center></td>
            <td><center><?= $listeInscrire[$i]['ETA_NOM'] ?></center></td>
            <td><center><?= $listeInscrire[$i]['FORM_LIBELLE'] ?></center></td>
            <td><center><button onclick="if(confirm('Voulez-vous vraiment modifier cet élément ?')==true) { window.location.href='./?action=modifIns&id=<?=$listeInscrire[$i]['INS_ELE']?>'; }" > ✍ </button></center></td>
            <td><center><button onclick="if(confirm('Voulez-vous vraiment supprimer cet élément ?')==true) { window.location.href='./?action=delIns2&id=<?=$listeInscrire[$i]['INS_ELE']?>&amp;stage=<?=$listeInscrire[$i]["INS_STA"]?>'; }" > ❌ </button></center></td>

    <?php
}
?>
</tbody></table>