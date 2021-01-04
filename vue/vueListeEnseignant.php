<div style="text-align:right;padding-bottom:5px;">
<button onclick="window.location.href='./?action=addEns';" id="bouton2" style="display:inline-block;">Ajouter</button>
</div>
<link rel="stylesheet" type="text/css" href="css/liste.css">
<table class="table">
        <thead>
            <th align="center">Nom</th>
            <th align="center">Prénom</th>
            <th align="center">E-mail</th>
            <th align="center">Tél.</th>
            <th align="center">Date de naissance</th>
            <th align="center">Supprimer</th>
            <th align="center">Modifier</th>
         </thead>
         <tbody>
<?php
for ($i = 0; $i < count($listeEnseignant); $i++) {
    ?>
    <tr>
            <td><center><?= $listeEnseignant[$i]["ENS_NOM"] ?></center></td>
            <td><center><?= $listeEnseignant[$i]["ENS_PRENOM"] ?></center></td>
            <td><center><?= $listeEnseignant[$i]["ENS_MAIL"] ?></center></td>
            <td><center><?= $listeEnseignant[$i]["ENS_TEL"] ?></center></td>
            <td><center><?= $listeEnseignant[$i]["ENS_DATENAISS"] ?></center></td>
            <td><center><button onclick="if(confirm('Voulez-vous vraiment supprimer cet élément ?')==true) { window.location.href='./?action=delEns&id=<?=$listeEnseignant[$i]['ENS_ID']?>'; }" > Supp. </button></center></td>
            <td><center><button onclick="if(confirm('Voulez-vous vraiment modifier cet élément ?')==true) { window.location.href='./?action=modifEns&id=<?=$listeEnseignant[$i]['ENS_ID']?>'; }" > Modif. </button></center></td>


    <?php
}
?>
</tbody></table>