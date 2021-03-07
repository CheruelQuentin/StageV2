<div style="text-align:right;padding-bottom:5px;">
<br>
    <center><h2 id="titre">Gestion des enseignants</h2></center>

<button onclick="window.location.href='./?action=addEns';" id="bouton2" style="display:inline-block;">Ajouter</button>
</div>
<link rel="stylesheet" type="text/css" href="css/liste.css">
<table class="table">
        <thead>
            <th align="center">Nom</th>
            <th align="center">Prénom</th>
            <th align="center">E-mail</th>
            <th align="center">Tél.</th>
            <th align="center">Modifier</th>
            <th align="center">Supprimer</th>
            
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
            <td><center><button onclick="if(confirm('Voulez-vous vraiment modifier cet élément ?')==true){window.location.href='./?action=modifEns&id=<?=$listeEnseignant[$i]['ENS_ID']?>'; }" > ✍ </button></center></td>
            <td><center><button onclick="if(confirm('Voulez-vous vraiment supprimer cet élément ?')==true) { window.location.href='./?action=delEns&id=<?=$listeEnseignant[$i]['ENS_ID']?>'; }" > ❌ </button></center></td>
    <?php
}
 ?>
</tbody></table>