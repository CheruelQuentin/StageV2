<?php if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ADMIN"){ //Si l'utilisateur est un admin ...  ?>
  <br><center><h2 id="titre">Inscription des élèves à une formation</h2></center>
  <body>
    <center><h2>Formulaire d'ajout </h2></center><br><br>
 <style type="text/css">
            @import url("css/form.css");
</style>
<p></p>
<link rel="stylesheet" type="text/css" href="css/style.css">
 <form method="post" action="./?action=genInsertIns">

<center>
  <table><tr><td>
  <p><label for="INS_ELE">Eleve : </label>
  <select name="INS_ELE">
      <?php
        for($i=0;$i<sizeof($eleves);$i++){ ?> 
          <option value= <?= $eleves[$i]['ELE_ID'];?> > 
            <?= $eleves[$i]['ELE_NOM'], " , ", $eleves[$i]['ELE_PRENOM'];?>
          </option> 
      <?php } ?>
    </select>
</p>



<div id="choixForm">
    <fieldset class="scheduler-border">    
          <legend class="scheduler-border">Choisir les ministages suivi par l’élève</legend>           

        <?php
        for($i=0;$i<sizeof($stage);$i++){ ?> 
          <input type="checkbox" name="choixForm[]" value=<?= $stage[$i]['STA_ID'];?>>&nbsp;&nbsp;&nbsp;
          <?= '<i style="color:blue;">Formation</i> ',$stage[$i]['FORM_LIBELLE'], '<i style="color:blue;"> Matière</i> ', $stage[$i]['MAT_LIBELLE'], '<i style="color:blue;"> Date</i> ', $stage[$i]['CRE_DATE'], '<i style="color:blue;"> Heure</i> ',substr($stage[$i]['CRE_HEUREDEB'],0,-3),'<i style="color:blue;"> Place restante </i>',getPlace($stage[$i]['STA_ID']);?>
          <br><br>
          
      <?php } ?>          
      </fieldset>
  </div>


  </p></td></tr></table><br>
                            <input type="submit" style="padding : 10px; width: 100px" value="Valider"/>
            <input type="reset" style="padding : 10px; width: 100px"/></p>
</form>

<?php } else if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="SADMIN"){ //Si l'utilisateur est un super-admin ...  ?>
 <br><center><h2 id="titre">Inscription des élèves à une formation</h2></center>
  <body>
    <center><h2>Formulaire d'ajout </h2></center><br><br>
 <style type="text/css">
            @import url("css/form.css");
</style>
<p></p>
<link rel="stylesheet" type="text/css" href="css/style.css">
 <form method="post" action="./?action=genInsertIns">

<center>
  <table><tr><td>
  <p><label for="INS_ELE">Eleve : </label>
  <select name="INS_ELE">
      <?php
        for($i=0;$i<sizeof($eleves);$i++){ ?> 
          <option value= <?= $eleves[$i]['ELE_ID'];?> > 
            <?= $eleves[$i]['ELE_NOM'], " , ", $eleves[$i]['ELE_PRENOM'];?>
          </option> 
      <?php } ?>
    </select>
</p>



<div id="choixForm">
    <fieldset class="scheduler-border">    
          <legend class="scheduler-border">Choisir les ministages suivi par l’élève</legend>           

        <?php
        for($i=0;$i<sizeof($stage);$i++){ ?> 
          <input type="checkbox" name="choixForm[]" value=<?= $stage[$i]['STA_ID'];?>>&nbsp;&nbsp;&nbsp;
          <?= '<i style="color:blue;">Formation</i> ',$stage[$i]['FORM_LIBELLE'], '<i style="color:blue;"> Matière</i> ', $stage[$i]['MAT_LIBELLE'], '<i style="color:blue;"> Date</i> ', $stage[$i]['CRE_DATE'], '<i style="color:blue;"> Heure</i> ',substr($stage[$i]['CRE_HEUREDEB'],0,-3),'<i style="color:blue;"> Place restante </i>',getPlace($stage[$i]['STA_ID']);?>
          <br><br>
          
      <?php } ?>          
      </fieldset>
  </div>


  </p></td></tr></table><br>
                            <input type="submit" style="padding : 10px; width: 100px" value="Valider"/>
            <input type="reset" style="padding : 10px; width: 100px"/></p>
</form>

<?php } else if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ETAB"){ //Si l'utilisateur est un établissement ...  ?>
<br><center><h2 id="titre">Inscription des élèves à une formation</h2></center>
  <body>
    <center><h2>Formulaire d'ajout </h2></center>
<br><br>
<p></p>
<link rel="stylesheet" type="text/css" href="css/style.css">
 <form method="post" action="./?action=genInsertIns">
 <style type="text/css">
            @import url("css/form.css");
</style>
<center>
  <table><tr><td>
  <p><label for="INS_ELE">Eleve : </label>
  <select name="INS_ELE">
      <?php
        for($i=0;$i<sizeof($eleves);$i++){ ?> 
          <option value= <?= $eleves[$i]['ELE_ID'];?> > 
            <?= $eleves[$i]['ELE_NOM'], " , ", $eleves[$i]['ELE_PRENOM'];?>
          </option> 
      <?php } ?>
    </select>
</p>



<p>Veuillez sélectionner un stage *: </p>
<div id="choixForm">
    <fieldset class="scheduler-border">    
          <legend class="scheduler-border">Choisir les ministages suivi par l’élève</legend>           

        <?php
        for($i=0;$i<sizeof($stage);$i++){ ?> 
          
          <input width=0px type="checkbox" name="choixForm[]" value=<?= $stage[$i]['STA_ID'];?>>&nbsp;&nbsp;&nbsp;
          <?= '<i style="color:blue;">Formation</i> ',$stage[$i]['FORM_LIBELLE'], '<i style="color:blue;"> Matière</i> ', $stage[$i]['MAT_LIBELLE'], '<i style="color:blue;"> Date</i> ', $stage[$i]['CRE_DATE'], '<i style="color:blue;"> Heure</i> ',substr($stage[$i]['CRE_HEUREDEB'],0,-3),'<i style="color:blue;"> Place restante </i>',getPlace($stage[$i]['STA_ID']);
          



          ?>
          <br><br>
          
      <?php } ?>          
      </fieldset>
  </div>





  </p></td></tr></table><br>
                            <input type="submit" style="padding : 10px; width: 100px" value="Valider"/>
            <input type="reset" style="padding : 10px; width: 100px"/></p>
</form>


 
 <?php }?>  