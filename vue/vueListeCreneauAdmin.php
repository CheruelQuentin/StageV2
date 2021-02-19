<div style="text-align:right;padding-bottom:5px;">
<div id="container">
  <br>
  <center><h2 id="titre">Gestion des créneaux</h2></center>
    <center><h2>Liste des créneaux</h2></center>


<button onclick="window.location.href='./?action=addCreAdmin';" id="bouton2" style="display:inline-block;">Ajouter</button>
</div>
<link rel="stylesheet" type="text/css" href="css/liste.css">
<?php
$listeCreneau = getListeCreneau();
for ($i = 0; $i < count($listeCreneau); $i++) {
    
    ?>
<table class="table" style="text-align:right; margin:0px">


<thead> 


       <th colspan="9"  style="background-color: #4097c9"><?= $listeCreneau[$i]["FORM_LIBELLE"] ?></th>
     </thead>
   </table>

<?php
  $result=getCreneauByFormAdmin($listeCreneau[$i]["FORM_CODE"]);

if(count($result)>0){

  ?>

<table class="table">
<tbody>
            
            <th align="center">Date</th>
            <th align="center">Date de fin</th>
            <th align="center">Heure début</th>
            <th align="center">Heure fin</th>
            <th align="center">Salle</th>
            <th align="center">Modifier</th>
            <th align="center">Supprimer</th>

<?php


for ($j = 0; $j < count($result); $j++) {
    ?>
 <tr>
       <td><center><?= strftime('%d/%m/%Y',strtotime($result[$j]["CRE_DATE"])) ?></center></td>
       <td><center><?= strftime('%d/%m/%Y',strtotime($result[$j]["CRE_DATEFIN"])) ?></center></td>
       <td><center><?= $result[$j]["CRE_HEUREDEB"] ?></center></td>
       <td><center><?= $result[$j]["CRE_HEUREFIN"] ?></center></td>
       <td><center><?= $result[$j]["CRE_SALLE"] ?></center></td>
       <td><center><button onclick="if(confirm('Voulez-vous vraiment modifier cet élément ?')==true) {window.location.href='./?action=modifCre&id=<?=$result[$j]["CRE_ID"]?>';}" > ✍ </button></center></td>
       <td><center><button onclick="if(confirm('Voulez-vous vraiment supprimer cet élément ?')==true) {window.location.href='./?action=delCreAdmin&id=<?=$result[$j]["CRE_ID"]?>';}" > ❌ </button></center></td>
        </tr>
    
     <?php 
                         }
?>
</tbody></table>
<br /><br /><br />
<?php
       
}else{
   

   ?><center><strong><?php echo "Aucun participant <br /><br /><br />"; ?></strong></center> 
   <?php
   }

 }
      ?>

