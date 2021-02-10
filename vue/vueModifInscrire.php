<!doctype html>
<html>
      <head>
            <title> Formulaire de modification </title>
            <meta name="description" content="Formulaire de modificaion"/>
            <meta charset="utf-8"/>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script><br>
            <script src="java/jquery.chained.js" type="text/javascript" charset="utf-8"></script>
            <link rel="stylesheet" type="text/css" href="css/autocomplete.css">
      </head>
      <body>
<div id="container">
  <br>
  <center><h2 id="titre">Gestion des inscrits</h2></center>
    <center><h2>Modification des inscrits</h2><br><br>


         <form method="post" action="./?action=upIns">
         <table><tr><td>
         <input id="INS_ELE" type="hidden" name="INS_ELE" size="50px" maxlength="20"  value="<?=$_GET['id']?>"/>
        </p>
          <label>Formation suivie :</label>
          <select id="form" name="INS_STA">
          <?php
           for($i=0;$i<sizeof($listeStage);$i++){ ?> 
            <option value= <?= $listeStage[$i]['STA_ID'];?>><?= getFormationById($listeStage[$i]['STA_FORM'])['FORM_LIBELLE'], " ",getCreneauById($listeStage[$i]['STA_CRE'])['CRE_DATE'], " ", getCreneauById($listeStage[$i]['STA_CRE'])['CRE_HEUREDEB'];?> </option> 
          <?php } ?>
          </select>
          <br><br>
          <center><input type="submit" style="padding : 10px; width: 200px" value="valider"/></center>

                    <p></p>
                    </td></tr></table><center>

             </form>
      </body>
</html>