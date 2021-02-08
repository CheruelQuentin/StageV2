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
        for($i=0;$i<sizeof($creneau);$i++){ ?> 
          <option value= <?= $creneau[$i]['CRE_ID'];?> ><?= $creneau[$i]['CRE_DATE'], ", ", $creneau[$i]['CRE_SALLE'], ", ", $creneau[$i]['CRE_HEUREDEB']; ?> </option> 
      <?php } ?>
  </select><br><br>
  <label for="STA_FORM"> Stage :</label>
  <select id="stage" name="STA_FORM">
      <?php
        for($i=0;$i<sizeof($formation);$i++){ ?> 
          <option value= <?= $formation[$i]['FORM_CODE'];?> ><?= $formation[$i]['FORM_LIBELLE']; ?> </option> 
      <?php } ?>
  </select><br><br>
  <label for="STA_MAT"> Matière :</label>
  <select id="matiere" name="STA_MAT">
      <?php
        for($i=0;$i<sizeof($matiere);$i++){ ?> 
          <option value= <?= $matiere[$i]['MAT_CODE'];?> ><?= $matiere[$i]['MAT_LIBELLE']; ?> </option> 
      <?php } ?>
  </select><br><br>
  <label for="STA_ENS"> Enseignant :</label>
  <select id="enseignant" name="STA_ENS">
      <?php
        for($i=0;$i<sizeof($enseignant);$i++){ ?> 
          <option value= <?= $enseignant[$i]['ENS_ID'];?> ><?= $enseignant[$i]['ENS_NOM'], " ", $enseignant[$i]['ENS_PRENOM']; ?> </option> 
      <?php } ?>
  </select><br><br>
  <label for="STA_ELEMIN"> Nb Minimum d'élèves :</label><input id="STA_ELEMIN" type="number" name="STA_ELEMIN" size="50px" maxlength="3" /><br><br>
  <br>
  <label for="STA_ELEMAX"> Nb Maximum d'élèves :</label><input id="STA_ELEMAX" type="number" name="STA_ELEMAX" size="50px" maxlength="3"  /><br>
  </tr></td></table><br>
                    <input type="submit" value="Valider"/>
                    

             </form></center>
      </body>
</html>