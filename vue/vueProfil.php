
<style type="text/css">
            @import url("css/connexion.css");
</style>


<?php if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ADMIN"){ //Si l'utilisateur est un admin ... ?>
<br>
<h1 id="titre">Bienvenue</h1><br>
<?php  
    if($listeStage == null){
  ?><center>  <?php      echo('Aucun mini-stage'); ?></center> <?php  
      }else{?>

<link rel="stylesheet" type="text/css" href="css/liste.css">
           <table class="table">
        <thead>
            <th align="center">Créneau</th>
            <th align="center">Formation</th>
            <th align="center">Matière</th>
            <th align="center">Enseignant</th>
            <th align="center">Salle</th>
            <th align="center">Min. Elèves</th>
            <th align="center">Max. Elèves</th>
         </thead>
         <tbody>
    <?php
for ($i = 0; $i < count($listeStage); $i++) {
    ?>
        <tr>
            <td><center><?= strftime('%d/%m/%Y',strtotime($listeStage[$i]['CRE_DATE'])), " | ",$listeStage[$i]['CRE_HEUREDEB']," - ", $listeStage[$i]['CRE_HEUREFIN'] ?></center></td>
            
            <td><center><?= $listeStage[$i]['FORM_LIBELLE'] ?></center></td>
            
            <td><center><?= $listeStage[$i]['MAT_LIBELLE'] ?></center></td>
            <td><center><?= $listeStage[$i]['ENS_NOM'], " ", $listeStage[$i]['ENS_PRENOM'] ?></center></td>
            <td><center><?= $listeStage[$i]['CRE_SALLE'] ?></center></td>
            <td><center><?= $listeStage[$i]["STA_ELEMIN"] ?></center></td>
            <td><center><?= $listeStage[$i]["STA_ELEMAX"] ?></center></td>

    <?php
}}
?>
</tbody></table>        


<?php } else if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ETAB"){ //Si l'utilisateur est un établissement ...  ?>
<h1 id="titre">
<br>
    <h1 id="titre">Bienvenue  <?= $resultat['CAT_LIBELLE'],' ',$resultat['ETA_NOM'] ?></h1>
</h1>
<link rel="stylesheet" type="text/css" href="css/liste.css">
<div style="text-align:right;padding-bottom:5px;">
<center><h2 id="titre">Liste des inscrits</h2></center><br>

<button onclick="window.location.href='./?action=addIns';" id="bouton2" style="display:inline-block;">Ajouter</button></div>

<?php
$listeCreneau = getListeCreneau();
for ($i = 0; $i < count($listeCreneau); $i++) {
    
    ?>
<table class="table"  style="text-align:right; margin:0px">


<thead> 


       <th colspan="9"  style="background-color: #4097c9"><?= $listeCreneau[$i]["FORM_LIBELLE"] ?></th>
     </thead>
   </table>

<?php
   $result=getInscrireByForm($listeCreneau[$i]["FORM_CODE"]);

if(count($result)>0){

  ?>

<table class="table">
<tbody>
        
            
            <th align="center">Date</th>
            <th align="center">Nom</th>
            <th align="center">Prénom</th>
            <th align="center">Classe</th>
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
       <td><center><?= $result[$j]["ELE_NOM"] ?></center></td>
       <td><center><?= $result[$j]["ELE_PRENOM"] ?></center></td>
       <td><center><?= $result[$j]["ELE_CLASSE"] ?></center></td>
       <td><center><?= $result[$j]["CRE_HEUREDEB"] ?></center></td>
       <td><center><?= $result[$j]["CRE_HEUREFIN"] ?></center></td>
       <td><center><?= $result[$j]["CRE_SALLE"] ?></center></td>
            <td><center><button onclick="if(confirm('Voulez-vous vraiment modifier cet élément ?')==true) { window.location.href='./?action=modifInsEta&id=<?=$result[$j]['ELE_ID'] ?>'; }" > ✍ </button></center></td>
            <td><center><button onclick="if(confirm('Voulez-vous vraiment supprimer cet élément ?')==true) { window.location.href='./?action=delIns&id=<?=$result[$j]['ELE_ID']?>&amp;stage=<?=$result[$j]["STA_ID"]?>'; }" > ❌ </button></center></td>
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


<?php } else { //Si l'utilisateur est un enseignant ... ?>    
<br>
<h1 id="titre">Bienvenue  <?= $ens['ENS_PRENOM'], " ", $ens['ENS_NOM'] ?></h1>
<div style="text-align:right;padding-bottom:5px; margin-bottom:0px">
  <div id="container">
      <center><h2 id="titre">Gestion des créneaux</h2></center>
  </div>
<link rel="stylesheet" type="text/css" href="css/liste.css">
<button onclick="window.location.href='./?action=addCre';" id="bouton2" style="display:inline-block;">Ajouter</button></div>
   


    <?php
    $listeCreneau = getListeCreneauEns($_SESSION["UTIL_ENS"]);
    for ($i = 0; $i < count($listeCreneau); $i++) {
    ?>


<table class="table" style="text-align:right; margin:0px">
    <thead> 
      <th colspan="9" style="background-color: #4097c9"><?= $listeCreneau[$i]["FORM_LIBELLE"] ?></th>
    </thead>
</table>
<?php
$result=getCreneauByForm($listeCreneau[$i]["FORM_CODE"]);
if(count($result)>0){
?>
<table class="table">
    <tbody>
            <th align="center">Date</th>
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
       <td><center><?= $result[$j]["CRE_HEUREDEB"] ?></center></td>
       <td><center><?= $result[$j]["CRE_HEUREFIN"] ?></center></td>
       <td><center><?= $result[$j]["CRE_SALLE"] ?></center></td>
       <td><center><button onclick="if(confirm('Voulez-vous vraiment modifier cet élément ?')==true) {window.location.href='./?action=modifCre&id=<?=$result[$j]["CRE_ID"]?>';}" > ✍ </button></center></td>
       <td><center><button onclick="if(confirm('Voulez-vous vraiment supprimer cet élément ?')==true) {window.location.href='./?action=delCre&id=<?=$result[$j]["CRE_ID"]?>';}" > ❌ </button></center></td>
        </tr>
    <?php
        }
      

       ?>

   
  </tbody></table>

 <?php                     
        
   
}else{
   ?><center><strong><?php echo "Aucun créneau <br /><br /><br />"; ?></strong></center><?php
   }}}

 ?>






<br><br><br><br><br>
