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
  <center><h2 id="titre">Gestion des matières</h2></center>
    <center><h2>Modification des matières</h2><br>
       <script src="js/verification.js"> </script>


             <form method="post" action="./?action=upMat">
             <table><tr><td>
              <input id="MAT_CODE" type="hidden" name="MAT_CODE" size="50px" maxlength="20" value="<?=$_GET['id']?>" />
              <label for="MAT_LIBELLE"> Libellé </label> : <input id="MAT_LIBELLE" type="text" name="MAT_LIBELLE" size="50px" required maxlength="100" value="<?=$libelle?>" required onblur="verifmodiflibelle();" /><div><span id = "erreurmodiflibelle" ></span></div><br>
            
<center>
                    <input type="submit" style="padding : 10px; width: 200px" value="valider"/></center>
                  
                    <p></p>
                    </td></tr></table>
             </form></center>
      </body>
</html>