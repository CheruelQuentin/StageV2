
<style type="text/css">
            @import url("css/connexion.css");
</style>


<?php if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ADMIN"){ //Si l'utilisateur est un admin ...  ?>
      
<div style="text-align:right;padding-bottom:5px;">

<link rel="stylesheet" type="text/css" href="css/liste.css">
<br>
<center><h2 id="titre">Gestion des inscrits</h2></center>
<button onclick="window.location.href='./?action=genAddIns';" id="bouton2" style="display:inline-block;">Ajouter</button></div>
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
            <td><center><button onclick="if(confirm('Voulez-vous vraiment modifier cet élément ?')==true) { window.location.href='./?action=genModifIns&id=<?=$listeInscrire[$i]['INS_ELE']?>'; }" > ✍ </button></center></td>
            <td><center><button onclick="if(confirm('Voulez-vous vraiment supprimer cet élément ?')==true) { window.location.href='./?action=genDelIns&id=<?=$listeInscrire[$i]['INS_ELE']?>&amp;stage=<?=$listeInscrire[$i]["INS_STA"]?>'; }" > ❌ </button></center></td>

    <?php
}
?>
</tbody></table><br><br><br><br>
<?php } else if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="SADMIN"){ //Si l'utilisateur est un établissement ...  ?>
   
<div style="text-align:right;padding-bottom:5px;">

<link rel="stylesheet" type="text/css" href="css/liste.css">
<br>
<center><h2 id="titre">Gestion des inscrits</h2></center>
<button onclick="window.location.href='./?action=genAddIns';" id="bouton2" style="display:inline-block;">Ajouter</button></div>
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
            <td><center><button onclick="if(confirm('Voulez-vous vraiment modifier cet élément ?')==true) { window.location.href='./?action=genModifIns&id=<?=$listeInscrire[$i]['INS_ELE']?>'; }" > ✍ </button></center></td>
            <td><center><button onclick="if(confirm('Voulez-vous vraiment supprimer cet élément ?')==true) { window.location.href='./?action=genDelIns&id=<?=$listeInscrire[$i]['INS_ELE']?>&amp;stage=<?=$listeInscrire[$i]["INS_STA"]?>'; }" > ❌ </button></center></td>

    <?php
}
?>
</tbody></table><br><br><br><br>
<?php } else if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ETAB"){//Si l'utilisateur est un établissement ...  ?>

<link rel="stylesheet" type="text/css" href="css/liste.css">
<div style="text-align:right;padding-bottom:5px;">


<br>
<center><h2 id="titre">Gestion des inscrits</h2></center><br>
<button onclick="window.location.href='./?action=genAddIns';" id="bouton2" style="display:inline-block;">Ajouter</button></div>

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
            <td><center><button onclick="if(confirm('Voulez-vous vraiment modifier cet élément ?')==true) { window.location.href='./?action=genModifIns&id=<?=$result[$j]['ELE_ID'] ?>'; }" > ✍ </button></center></td>
            <td><center><button onclick="if(confirm('Voulez-vous vraiment supprimer cet élément ?')==true) { window.location.href='./?action=genDelIns&id=<?=$result[$j]['ELE_ID']?>&amp;stage=<?=$result[$j]["STA_ID"]?>'; }" > ❌ </button></center></td>
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
</tbody></table><br><br><br><br>
<?php } else { //Si l'utilisateur est un enseignant ... ?>


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
 <?php }?>  