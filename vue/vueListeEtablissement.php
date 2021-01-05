<div style="text-align:right;padding-bottom:5px;">
    <center><h2 id="titre">Gestion des établissements</h2></center>

<button onclick="window.location.href='./?action=addEta';" id="bouton2" style="display:inline-block;">Ajouter</button>
</div>
<link rel="stylesheet" type="text/css" href="css/liste.css">
<table class="table">
        <thead>
            <th align="center">Nom</th>
            <th align="center">Ville</th>
            <th align="center">Adresse</th>
            <th align="center">Code Postal</th>
            <th align="center">E-mail</th>
            <th align="center">Civilité</th>
            <th align="center">Nom du proviseur</th>
            <th align="center">Prénom du proviseur</th>
            <th align="center">Tél.</th>
            <th align="center">Supprimer</th>
            <th align="center">Modifier</th>
         </thead>
         <tbody>
<?php 
for ($i = 0; $i < count($listeEtablissement); $i++) {

    ?>
    <tr>
            <td><center><?= $listeEtablissement[$i]["ETA_NOM"] ?></center></td>
            <td><center><?= $listeEtablissement[$i]["ETA_VILLE"] ?></center></td>
            <td><center><?= $listeEtablissement[$i]["ETA_ADRESSE"] ?></center></td>
            <td><center><?= $listeEtablissement[$i]["ETA_CP"] ?></center></td>
            <td><center><?= $listeEtablissement[$i]["ETA_MAIL"] ?></center></td>
            <td><center><?= $listeEtablissement[$i]["ETA_PROVCIVIL"] ?></center></td>
            <td><center><?= $listeEtablissement[$i]["ETA_PROVNOM"] ?></center></td>
            <td><center><?= $listeEtablissement[$i]["ETA_PROVPRENOM"] ?></center></td>
            <td><center><?= $listeEtablissement[$i]["ETA_TEL"] ?></center></td>
            <td><center><button onclick="if(confirm('Voulez-vous vraiment supprimer cet élément ?')==true) { window.location.href='./?action=delEta&id=<?=$listeEtablissement[$i]['ETA_ID']?>'; }" > Supp. </button></center></td>
            <td><center><button onclick="if(confirm('Voulez-vous vraiment modifier cet élément ?')==true) { window.location.href='./?action=modifEta&id=<?=$listeEtablissement[$i]['ETA_ID']?>'; }" > Modif. </button></center></td>
    </tr>

    <?php
}
?>
</tbody></table>