<!doctype html>
<html>
      <head>
            <title> Formulaire de modification </title>
            <meta name="description" content="Formulaire de modification"/>
            <meta charset="utf-8"/>
      </head>
      <body>
      <br><center><h2 id="titre">Gestion des créneaux</h2></center>
         <center><h2>Modification Creneau </h2><br><br>
       <script src="js/verification.js"> </script>


             <form method="post" action="./?action=upCon">
<center>
  <table><tr><td>     
<div>
<p><label for="CON_PRIXREPAS"> Prix du repas </label> : <input id="CON_PRIXREPAS" type="text" name="CON_PRIXREPAS" size="50px" maxlength="11" value="<?=$prix?>" /></p><br>
<p><label for="CON_NOMDDFPT"> Nom du DDFPT </label> : <input id="CON_NOMDDFPT" type="text" name="CON_NOMDDFPT" size="50px" maxlength="50" value="<?=$nom?>" /></p><br>
<p><label for="CON_PRENOMDDFPT"> Prénom du DDFPT </label> : <input id="CON_PRENOMDDFPT" type="text" name="CON_PRENOMDDFPT" size="50px" maxlength="50" value="<?=$prenom?>" /></p><br>
<br>
  </td></tr></table><br>
                    <input type="submit" style="padding : 10px; width: 200px" value="valider"/>

                    <p></p>
</div></center>
             </form></center>
      </body>
</html>
