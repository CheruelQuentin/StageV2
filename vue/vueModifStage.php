<!doctype html>
<html>
      <head>
            <title> Formulaire de modification </title>
            <meta name="description" content="Formulaire de modification"/>
            <meta charset="utf-8"/>
      </head>
      <body>
         <center><h2>Modification Stage </h2>
              <script src="js/verification.js"> </script>


             <form method="post" action="./?action=upSta">
             <table><tr><td>
<input id="FORM_CODE" type="hidden" name="FORM_CODE" size="50px" maxlength="20" value="<?=$_GET['id']?>"/>
    <label for="FORM_LIBELLE">Libellé :</label><input id="FORM_LIBELLE" type="text" name="FORM_LIBELLE" size="50px" maxlength="128" required value="<?=$libelle?>"  />

 
                    <input type="submit" value="valider"/>
            
            </tr></td></table>
             </form></center>
      </body>
</html>