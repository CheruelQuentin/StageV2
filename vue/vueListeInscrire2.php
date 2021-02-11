<div style="text-align:right;padding-bottom:5px;">
</div>
<link rel="stylesheet" type="text/css" href="css/liste.css">
<br>
<center><h2 id="titre">Liste des stagiaires</h2></center>
<br>
<table class="table">
        <thead>
            <th align="center">Nom</th>
            <th align="center">Prénom</th>
            <th align="center">Salle</th>
            <th align="center">Créneau</th>
            <th align="center">Formation</th>
         </thead>
         <tbody>
<?php
for ($i = 0; $i < count($listeInscrire2); $i++) {
    ?>
        <tr>
            <td><center><?= $listeInscrire2[$i]["ELE_NOM"] ?></center></td>
            <td><center><?= $listeInscrire2[$i]['ELE_PRENOM']?></center></td>
            <td><center><?= $listeInscrire2[$i]["CRE_SALLE"]?></center></td>
            <td><center><?= strftime('%d/%m/%Y',strtotime($listeInscrire2[$i]['CRE_DATE'])), " ",$listeInscrire2[$i]['CRE_HEUREDEB'] ?></center></td>
            <td><center><?= $listeInscrire2[$i]['FORM_LIBELLE'] ?></center></td>

    <?php
}
?>
</tbody></table><br><br><br><br>