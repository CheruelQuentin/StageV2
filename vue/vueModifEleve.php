<!doctype html>
<html>
      <head>
            <title> Formulaire de modification </title>
            <meta name="description" content="Formulaire de modification"/>
            <meta charset="utf-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <script src="java/autocomplete.java"></script>
            <link rel="stylesheet" type="text/css" href="css/autocomplete.css">
              <?php $etablissement=getEtablissement(); $formations=getFormation();
              $etaById=getEtablissementById(getEleveById($_GET['id'])['ELE_ETA'])?>
      </head>
      <body>
        <center><h2>Modification eleve </h2>
        <script src="js/verification.js"> </script>
        <form method="post" action="./?action=upEle">
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
<p><label for="ELE_NOM"> Nom :</label><input id="ELE_NOM" type="text" name="ELE_NOM" size="50px" maxlength="100" value="<?=$nom?>"  onblur="verifmodifnomEle();" /><span id = "erreurmodifnomEle" ></span></p>
<p><label for="ELE_PRENOM"> Prénom :</label><input id="ELE_PRENOM" type="text" name="ELE_PRENOM" size="50px" maxlength="100" value="<?=$prenom?>" onblur="verifmodifprenomEle();" /><span id = "erreurmodifprenomEle" ></span></p>
<p><label for="ELE_DATENAISS"> Date de Naissance :</label><input id="ELE_DATENAISS" type="date" name="ELE_DATENAISS" size="50px" maxlength="20" value="<?=$dateN?>" /></p>
<p><label for="ELE_CLASSE"> Classe :</label><input id="ELE_CLASSE" type="text" name="ELE_CLASSE" size="50px" maxlength="10" value="<?=$classe?>" onblur="verifmodifclasse();" /><span id = "erreurmodifclasse" ></span></p>
<p><label for="ELE_MAIL"> E-mail :</label><input id="ELE_MAIL" type="text" name="ELE_MAIL" size="50px" maxlength="150" value="<?=$mail?>" /></p>

<div id="choixForm">
    <fieldset>      
        <legend>Formations à suivre</legend>           
        <?php
        for($i=0;$i<sizeof($formations);$i++){ ?> 
          <input type="checkbox" name="choixForm[]" value=<?= $formations[$i]['FORM_ID'];?>
          ><?= getStageById($formations[$i]['FORM_STA'])['STA_LIBELLE'], " - ", getMatiereById($formations[$i]['FORM_MAT'])['MAT_LIBELLE'], " | ", getCreneauById($formations[$i]['FORM_CRE'])['CRE_DATE'], " - ",getCreneauById($formations[$i]['FORM_CRE'])['CRE_HEUREDEB'];?>
          <br>
          
      <?php } ?>          
      </fieldset>
  </div>
    </tr></td></table>
                    <input type="submit" value="valider"/>
                    <input type="reset"/></p>
                    <p></p>


             </form>
      </body>
</html>
