<link rel="stylesheet" type="text/css" href="css/liste.css">
<div style="text-align:right;padding-bottom:5px;">


<br>
<center><h2 id="titre">Gestion des inscrits</h2></center><br>
<center><h2>Liste des Inscrits</h2></center>
<br>
<?php
$listeCreneau = getListeCreneauEns($_SESSION["UTIL_ENS"]);
for ($i = 0; $i < count($listeCreneau); $i++) {
    
    ?>
<table class="table" style="text-align:right; margin:0px">


<thead> 


       <th colspan="9"  style="background-color: #4097c9"><?= $listeCreneau[$i]["FORM_LIBELLE"] ?></th>
     </thead>
   </table>

<?php
   $result=getInscrireByFormEns($listeCreneau[$i]["FORM_CODE"]);

if(count($result)>0){

  ?>
<table class="table">
<tbody>        
            
            <th align="center">Date</th>
            <th align="center">Date de fin</th>
            <th align="center">Nom</th>
            <th align="center">Prénom</th>
            <th align="center">Classe</th>
            <th align="center">Heure début</th>
            <th align="center">Heure fin</th>
            <th align="center">Salle</th>

      



<?php
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
        </tr>
    <?php
        }
}else{
   

   ?><center><strong><?php echo "Aucun participant <br /><br /><br />";?></strong></center> <?php
   }
}
 if(count($listeCreneau)==0){
            ?><center><strong>Aucun participant<br /><br /><br /></strong></center><?php
           }

       ?>







</tbody></table><br><br><br><br>