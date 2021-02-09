<!doctype html>
<html>
      <head>
            <title> Formulaire de modification </title>
            <meta name="description" content="Formulaire de modification"/>
            <meta charset="utf-8"/>
      </head>
      <body>
<div id="container">
  <br>
  <center><h2 id="titre">Gestion des stages</h2></center>
    <center><h2>Modification du stage</h2><br>
              <script src="js/verification.js"> </script>


             <form method="post" action="./?action=upSta">
             <table><tr><td>
<input id="FORM_CODE" type="hidden" name="FORM_CODE" size="50px" maxlength="20" value="<?=$_GET['id']?>"/>
    <label for="FORM_LIBELLE">Libellé :</label><input id="FORM_LIBELLE" type="text" name="FORM_LIBELLE" size="50px" maxlength="128" required value="<?=$libelle?>"  onblur="verifmodiflibellestage();" /><div><span id = "erreurmodiflibellestage" ></span></div><br>

 
                    
            
            </tr></td></table>

            <input type="submit" style="padding : 10px; width: 200px" value="valider"/>
             </form></center>
      </body>
</html>