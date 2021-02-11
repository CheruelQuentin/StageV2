
<style type="text/css">
            @import url("css/connexion.css");
</style>


<?php if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ADMIN"){ //Si l'utilisateur est un admin ... ?>
<br>
<h1 id="titre">Bienvenue</h1><br>
<?php  
    if($listeStage == null){
        echo('Aucun mini-stage');
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
            <td><center><?= strftime('%d/%m/%Y',strtotime(getCreneauById($listeStage[$i]["STA_CRE"])['CRE_DATE'])), " | ",getCreneauById($listeStage[$i]["STA_CRE"])['CRE_HEUREDEB']," - ", getCreneauById($listeStage[$i]["STA_CRE"])['CRE_HEUREFIN'] ?></center></td>
            
            <td><center><?= getFormationById($listeStage[$i]["STA_FORM"])['FORM_LIBELLE'] ?></center></td>
            
            <td><center><?= getMatiereById($listeStage[$i]["STA_MAT"])['MAT_LIBELLE'] ?></center></td>
            <td><center><?= getEnseignantById($listeStage[$i]["STA_ENS"])['ENS_NOM'], " ", getEnseignantById($listeStage[$i]["STA_ENS"])['ENS_PRENOM'] ?></center></td>
            <td><center><?= getCreneauById($listeStage[$i]["STA_CRE"])['CRE_SALLE'] ?></center></td>
            <td><center><?= $listeStage[$i]["STA_ELEMIN"] ?></center></td>
            <td><center><?= $listeStage[$i]["STA_ELEMAX"] ?></center></td>

    <?php
}}
?>
</tbody></table>        


<?php } else if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ETAB"){ //Si l'utilisateur est un établissement ...  ?>
    <br>
<h1 id="titre">
<?php     
echo"Bienvenue ";
?>
</h1><br>
    <link rel="stylesheet" type="text/css" href="css/liste.css">
<link rel="stylesheet" type="text/css" href="css/liste.css">
<div style="text-align:right;padding-bottom:5px;">


<br>
<center><h2 id="titre">Liste des inscrits</h2></center><br>
<button onclick="window.location.href='./?action=addIns';" id="bouton2" style="display:inline-block;">Ajouter</button></div>

<?php
$listeCreneau = getListeCreneau();
for ($i = 0; $i < count($listeCreneau); $i++) {
    
    ?>
<table class="table">


<thead> 


       <th colspan="9" style="background-color: #4097c9"><?= $listeCreneau[$i]["FORM_LIBELLE"] ?></th>
     </thead>


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

$result=getInscrireByForm($listeCreneau[$i]["FORM_CODE"]);

if(count($result)>0){
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
            <td><center><button onclick="if(confirm('Voulez-vous vraiment modifier cet élément ?')==true) { window.location.href='./?action=modifIns2&id=<?=$result[$j]['ELE_ID'] ?>'; }" > ✍ </button></center></td>
            <td><center><button onclick="if(confirm('Voulez-vous vraiment supprimer cet élément ?')==true) { window.location.href='./?action=delIns&id=<?=$result[$j]['ELE_ID']?>&amp;stage=<?=$result[$j]["STA_ID"]?>'; }" > ❌ </button></center></td>
        </tr>
    <?php
        }
}

       ?>
<br>
     <?php                     }
?>
</tbody></table>

<?php } else { //Si l'utilisateur est un enseignant ... ?>



   
    
<!--<br>
    <h1 id="titre">Bienvenue  <?= getEnseignantProfil($_SESSION["UTIL_ENS"])['ENS_PRENOM'], " ", getEnseignantProfil($_SESSION["UTIL_ENS"])['ENS_NOM'] ?></h1>-->
<br>
<div style="text-align:right;padding-bottom:5px;">
<div id="container">
    <center><h2 id="titre">Gestion des créneaux</h2></center>
    <center><h2>Liste des créneaux</h2></center>
</div>
<link rel="stylesheet" type="text/css" href="css/liste.css">
<button onclick="window.location.href='./?action=addCre';" id="bouton2" style="display:inline-block;">Ajouter</button></div>
<?php
$listeCreneau = getListeCreneau();
for ($i = 0; $i < count($listeCreneau); $i++) {
    
    ?>
<table class="table">


<thead>
       <th colspan="6"style="background-color: #4097c9"><?= $listeCreneau[$i]["FORM_LIBELLE"] ?></th>
     </thead>


<tbody>
        
            
            <th align="center">Date</th>
            <th align="center">Heure début</th>
            <th align="center">Heure fin</th>
            <th align="center">Salle</th>
            <th align="center">Modifier</th>
            <th align="center">Supprimer</th>
      

<?php

$result=getCreneauByForm($listeCreneau[$i]["FORM_CODE"]);

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
<br>
     <?php                     }
?>
</tbody></table>

<?php } ?><br><br><br><br><br>
</tbody></table>
</div>

