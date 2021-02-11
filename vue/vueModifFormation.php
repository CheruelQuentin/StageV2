<!doctype html>
<html>
      <head>
            <title> Formulaire de modification </title>
            <meta name="description" content="Formulaire de modificaion"/>
            <meta charset="utf-8"/>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script><br>
            <script src="js/jquery.chained.js" type="text/javascript" charset="utf-8"></script>
            <script type="text/javascript" charset="utf-8">
              $(function() {
                  $("#creneau").chained("#stage").chained("#matiere").chained("#enseignant");
              });
            </script>
            <?php $creneau=getCreneau(); $formation=getFormation(); $matiere=getMatiere(); $enseignant=getEnseignant();?>
      </head>
      <body>
         <center><h2>Modification Formation</h2>
       


             <form method="post" action="./?action=upForm">
              <table><tr><td>

  <input id="STA_ID" type="hidden" name="STA_ID" size="50px" maxlength="20"  value="<?=$_GET['id']?>"/>
 

  <label for="STA_CRE"> Créneau :</label>
  <select id="creneau" name="STA_CRE">
      <?php
         for($i=0;$i<sizeof($listeCreneau);$i++){ ?> 
          <option value="<?= $listeCreneau[$i]['CRE_ID'];?>"
            
            <?php if ($listeCreneau[$i]['CRE_ID']==$listeFormation2['STA_CRE']){?> selected   <?php } ?>

           ><?= $listeCreneau[$i]['CRE_DATE'],' | ',$listeCreneau[$i]['CRE_HEUREDEB'],' - ',$listeCreneau[$i]['CRE_HEUREFIN']?> </option> 
      <?php } ?>

  </select><br><br>


  <label for="STA_FORM"> Stage :</label>
  <select id="stage" name="STA_FORM">
      <?php
         for($i=0;$i<sizeof($listeFormation);$i++){ ?> 
          <option value="<?= $listeFormation[$i]['FORM_CODE'];?>"
            
            <?php if ($listeFormation[$i]['FORM_CODE']==$listeFormation2['STA_FORM']){?> selected   <?php } ?>

           ><?= $listeFormation[$i]['FORM_LIBELLE']?> </option> 
      <?php } ?>
  

  </select><br><br>
  <label for="STA_MAT"> Matière :</label>
  <select id="matiere" name="STA_MAT">
      <?php
         for($i=0;$i<sizeof($listeMatiere);$i++){ ?> 
          <option value="<?= $listeMatiere[$i]['MAT_CODE'];?>"
            
            <?php if ($listeMatiere[$i]['MAT_CODE']==$listeFormation2['STA_MAT']){?> selected   <?php } ?>

           ><?= $listeMatiere[$i]['MAT_LIBELLE']?> </option> 
      <?php } ?>

  </select><br><br>
  <label for="STA_ENS"> Enseignant :</label>
  <select id="enseignant" name="STA_ENS">
      <?php
        for($i=0;$i<sizeof($listeEnseignant);$i++){ ?> 
          <option value="<?= $listeEnseignant[$i]['ENS_ID'];?>"
            
            <?php if ($listeEnseignant[$i]['ENS_ID']==$listeFormation2['STA_ENS']){?> selected   <?php } ?>

           ><?= $listeEnseignant[$i]['ENS_NOM'], ' ',$listeEnseignant[$i]['ENS_PRENOM']    ?> </option> 
      <?php } ?>
  </select><br><br>

  <label for="STA_ELEMIN"> Nb Minimum d'élèves :</label><input id="STA_ELEMIN" type="number" name="STA_ELEMIN" size="50px" maxlength="3" value="<?=$min?>"/><br><br>
  <br>
  <label for="STA_ELEMAX"> Nb Maximum d'élèves :</label><input id="STA_ELEMAX" type="number" name="STA_ELEMAX" size="50px" maxlength="3" value="<?=$max?>" /><br>
  </tr></td></table><br>
                    <input type="submit" value="Valider"/>
                    

             </form></center>
      </body>
</html>