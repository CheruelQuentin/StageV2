<link rel="stylesheet" type="text/css" href="css/liste.css">
<div style="text-align:right;padding-bottom:5px;">


<br>
<center><h2 id="titre">Gestion des inscrits</h2></center><br>
<button onclick="window.location.href='./?action=addIns';" id="bouton2" style="display:inline-block;">Ajouter</button></div>

<?php
$listeCreneau = getListeCreneau();
for ($i = 0; $i < count($listeCreneau); $i++) {
    
    ?>
<table class="table">


<thead> 


       <th colspan="10" style="background-color: #4097c9"><?= $listeCreneau[$i]["FORM_LIBELLE"] ?></th>
     </thead>


<tbody>
        
            
            <th align="center">Date</th>
            <th align="center">Date de fin</th>
            <th align="center">Nom</th>
            <th align="center">Prénom</th>
            <th align="center">Classe</th>
            <th align="center">Heure début</th>
            <th align="center">Heure fin</th>
            <th align="center">Salle</th>
            <th align="center">Modifier</th>
            <th align="center">Supprimer</th>
      



<?php

$result=getInscrireByForm($listeCreneau[$i]["FORM_CODE"]);

if(count($result)>0){
for ($j = 0; $j < count($result); $j++) {
    ?>
 <tr>
       <td><center><?= strftime('%d/%m/%Y',strtotime($result[$j]["CRE_DATE"])) ?></center></td>
       <td><center><?= strftime('%d/%m/%Y',strtotime($result[$j]["CRE_DATEFIN"])) ?></center></td>
       <td><center><?= $result[$j]["ELE_NOM"] ?></center></td>
       <td><center><?= $result[$j]["ELE_PRENOM"] ?></center></td>
       <td><center><?= $result[$j]["ELE_CLASSE"] ?></center></td>
       <td><center><?= $result[$j]["CRE_HEUREDEB"] ?></center></td>
       <td><center><?= $result[$j]["CRE_HEUREFIN"] ?></center></td>
       <td><center><?= $result[$j]["CRE_SALLE"] ?></center></td>
            <td><center><button onclick="if(confirm('Voulez-vous vraiment modifier cet élément ?')==true) { window.location.href='./?action=modifInsEta&id=<?=$result[$j]['ELE_ID'] ?>'; }" > ✍ </button></center></td>
            <td><center><button onclick="if(confirm('Voulez-vous vraiment supprimer cet élément ?')==true) { window.location.href='./?action=delIns&id=<?=$result[$j]['ELE_ID']?>&amp;stage=<?=$result[$j]["STA_ID"] ?>'; }" > ❌ </button></center></td>
        </tr>
    <?php
        }
} else {
    echo("C'est vide mon con");
}

       ?>
<br>
     <?php                     }
?>
</tbody></table><br><br><br><br>
