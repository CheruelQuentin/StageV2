<!doctype html>
<html>
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
    <center><h2>Modification des inscrits</h2><br>
         <form method="post" action="./?action=upIns2">
         <table><tr><td>
         <input id="INS_ELE" type="hidden" name="INS_ELE" size="50px" maxlength="20"  value="<?=$_GET['id']?>"/>
        </p>
          
<div id="choixForm">
    <fieldset class="scheduler-border">    
          <legend class="scheduler-border">Choisir les ministages suivi par l’élève</legend>           

        <?php
        for($i=0;$i<sizeof($listeStage);$i++){ ?> 
          <input type="checkbox" name="choixForm[]" value="<?= $listeStage[$i]['FORM_CODE'];?>"
          <?php if ($listeStage[$i]['FORM_CODE']==$listeInscrire['STA_FORM']){?> checked   <?php } ?>

           ><?= $listeStage[$i]['FORM_LIBELLE']?>
          <br><br>
          
      <?php } ?>          
      </fieldset>
  </div>  
          <br><br><center>
          <input type="submit" style="padding : 10px; width: 200px" value="valider"/>
                   </center> 
                    <p></p>
                    </td></tr></table><center>

             </form>
      </body>
</html>