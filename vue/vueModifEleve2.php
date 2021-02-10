<!doctype html>
<html>
      <head>
            <title> Formulaire de modification </title>
            <meta name="description" content="Formulaire de modification"/>
            <meta charset="utf-8"/>
            <script src="java/autocomplete.java"></script>
            <link rel="stylesheet" type="text/css" href="css/autocomplete.css">
            <script src="js/verification.js"> </script>
            <link rel="stylesheet" type="text/css" href="css/liste.css">
            <link rel="stylesheet" type="text/css" href="css/style.css">
      </head>
      <body>
 <style type="text/css">
            @import url("css/form.css");
</style>
<div id="container">
  <br>
  <center><h2 id="titre">Gestion des élèves</h2></center>
    <center><h2>Modification d'élève</h2><br><br>
        <form method="post" action="./?action=upEle2">
        <table><tr><td>            
          <input id="ELE_ID" type="hidden" name="ELE_ID" size="50px" maxlength="20" value="<?=$_GET['id']?>" />
          <div class="ui-widget">
            <label>Etablissement :</label>
            <select id="combobox" name="ELE_ETA">
              <option selected value=<?= $etaById['ETA_ID'];?>><?=$etaById['ETA_NOM'], " ", $etaById['ETA_VILLE'];?></option>
              <?php
                for($i=0;$i<sizeof($etablissement);$i++){ ?> 
                  <option value= <?= $etablissement[$i]['ETA_ID'];?>><?=$etablissement[$i]['ETA_NOM'], " ", $etablissement[$i]['ETA_VILLE'];?> </option> 
              <?php } ?>
            </select>
          </div>
          <br><br>
<p><label for="ELE_NOM">Nom *:</label><input id="ELE_NOM" type="text" name="ELE_NOM" size="50px" maxlength="100" value="<?=$nom?>" required onblur="verifmodifnomEle();" /><div><span id = "erreurmodifnomEle" ></span></div><br>

<p><label for="ELE_PRENOM">Prénom *:</label><input id="ELE_PRENOM" type="text" name="ELE_PRENOM" size="50px" maxlength="100" value="<?=$prenom?>" required onblur="verifmodifprenomEle();" /><div><span id = "erreurmodifprenomEle" ></span></div><br>

<p><label for="ELE_DATENAISS">Date de Naissance *:</label><input id="ELE_DATENAISS" type="date" name="ELE_DATENAISS" size="50px" maxlength="20" value="<?=$dateN?>" required /></p><br>

<p><label for="ELE_CLASSE">Classe *:</label><input id="ELE_CLASSE" type="text" name="ELE_CLASSE" size="50px" maxlength="50" required value="<?=$classe?>"  onblur="verifmodifclasse();" /><div><span id = "erreurmodifclasse" ></span></div><br>

<p><label for="ELE_MAIL">E-mail :</label><input id="ELE_MAIL" type="mail" name="ELE_MAIL" size="50px" maxlength="150"   value="<?=$mail?>" /></p>

<div id="choixForm">
    <fieldset class="scheduler-border">    
          <legend class="scheduler-border">Formations à suivre *</legend>           
        <?php
        for($i=0;$i<sizeof($stage);$i++){ ?> 
          <input type="checkbox" name="choixForm[]" value=<?= $stage[$i]['STA_ID'];?>
          ><?= getFormationById($stage[$i]['STA_FORM'])['FORM_LIBELLE'], " - ", getMatiereById($stage[$i]['STA_MAT'])['MAT_LIBELLE'], " | ", getCreneauById($stage[$i]['STA_CRE'])['CRE_DATE'], " - ",getCreneauById($stage[$i]['STA_CRE'])['CRE_HEUREDEB'];?>
          <br><br>
          
      <?php } ?>          
      </fieldset>
  </div>
    </tr></td></table>
<br>
<p>* Champ obligatoire</p>
    <br>
                    <input type="submit" style="padding : 10px; width: 200px" value="valider"/>
 
                    <p></p>


             </form>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
      </body>
</html>
