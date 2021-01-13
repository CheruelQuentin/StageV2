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
    <label for="FORM_LIBELLE">Libellé :</label><input id="FORM_LIBELLE" type="text" name="FORM_LIBELLE" size="50px" maxlength="128" value="<?=$libelle?>" onblur="verifmodiflibellestage();" /><span id = "erreurmodiflibellestage" ></span>

 
                    <input type="submit" value="valider"/>
                    <input type="reset"/>
            </tr></td></table>
             </form></center>
      </body>
</html>