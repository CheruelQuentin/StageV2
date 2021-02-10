<?php
//vue pour l'admin de la liste de tout les élèves
?>



<div style="text-align:right;padding-bottom:5px;">
<br>
<center><h2 id="titre">Gestion des élèves</h2></center><br>

</div>
<link rel="stylesheet" type="text/css" href="css/liste.css">
<table class="table">
        <thead>
            <th align="center">Etablissement</th>
            <th align="center">Nom</th>
            <th align="center">Prénom</th>
            <th align="center">Date de naissance</th>
            <th align="center">Classe</th>
            <th align="center">E-mail</th>
            <th align="center">Modifier</th>
            <th align="center">Supprimer</th>
            
         </thead>
         <tbody>


<?php


for ($i = 0; $i < count($listeEleve); $i++) {

    ?>
   
        <tr>
            <td><center><?= getEtablissementById($listeEleve[$i]["ELE_ETA"])['ETA_NOM'], ", ",getEtablissementById($listeEleve[$i]["ELE_ETA"])['ETA_VILLE'] ?></center></td>
            <td><center><?= $listeEleve[$i]["ELE_NOM"] ?></center></td>
            <td><center><?= $listeEleve[$i]["ELE_PRENOM"] ?></center></td>
            <td><center><?= strftime('%d/%m/%Y',strtotime($listeEleve[$i]["ELE_DATENAISS"])) ?></center></td>
            <td><center><?= $listeEleve[$i]["ELE_CLASSE"] ?></center></td>
            <td><center><?= $listeEleve[$i]["ELE_MAIL"] ?></center></td>
            
            <td><center><button onclick="if(confirm('Voulez-vous vraiment modifier cet élément ?')==true) { window.location.href='./?action=modifEle&id=<?=$listeEleve[$i]['ELE_ID']?>'; }" > ✍ </button></center></td>
            <td><center><button onclick="if(confirm('Voulez-vous vraiment supprimer cet élève de la base de données? Ses inscriptions seront également effacées.')==true) { window.location.href='./?action=delEle2&id=<?=$listeEleve[$i]['ELE_ID']?>'; }" > ❌ </button></center></td>
          

    <?php
}
?>
</tbody></table>