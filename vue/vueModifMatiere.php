<!doctype html>
<html>
      <head>
            <title> Formulaire de modification </title>
            <meta name="description" content="Formulaire de modification"/>
            <meta charset="utf-8"/>
      </head>
      <body>
         <center><h2>Modification Matière </h2>
       <script src="js/verification.js"> </script>


             <form method="post" action="./?action=upMat">
             <table><tr><td>
              <input id="MAT_CODE" type="hidden" name="MAT_CODE" size="50px" maxlength="20" value="<?=$_GET['id']?>" />
              <label for="MAT_LIBELLE"> Libellé </label> : <input id="MAT_LIBELLE" type="text" name="MAT_LIBELLE" size="50px" required pattern="[a-zA-ZÀ-ÿ]{1,100}" title="La première lettre doit être une majuscule et le libelle ne doit pas contenir des carac.spéciaux" maxlength="100" value="<?=$libelle?>" onblur="verifmodiflibelle();" /><span id = "erreurmodiflibelle" ></span>
            

                    <input type="submit" value="valider" onclick="verifmodiflibelle()" />
                    <input type="reset"/></p>
                    <p></p>
                    </td></tr></table>
             </form></center>
      </body>
</html>