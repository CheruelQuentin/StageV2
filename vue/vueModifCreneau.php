<!doctype html>
<html>
      <head>
            <title> Formulaire de modification </title>
            <meta name="description" content="Formulaire de modification"/>
            <meta charset="utf-8"/>
      </head>
      <body>
         <center><h2>Modification Creneau </h2>
       <script src="js/verification.js"> </script>


             <form method="post" action="./?action=upCre">


<p><label for="CRE_ID"> Selectionner l'id </label> : <input id="CRE_ID" type="int" name="CRE_ID" size="50px" maxlength="11" placeholder="CRE_ID" /></p>
<p><label for="CRE_MAT"> Selectionner Matiere </label> : <input id="CRE_MAT" type="int" name="CRE_MAT" size="50px" maxlength="11" placeholder="CRE_MAT" /></p>
<p><label for="CRE_DATE"> Modification date </label> : <input id="CRE_DATE" type="date" name="CRE_DATE" size="50px" maxlength="20" placeholder="CRE_DATE" /></p>
<p><label for="CRE_HEUREDEB"> Modification Heure de début </label> : <input id="CRE_HEUREDEB" type="time" name="CRE_HEUREDEB" size="50px" maxlength="20" placeholder="CRE_HEUREDEB" /></p>
<p><label for="CRE_SALLE"> Modification salle </label> : <input id="CRE_SALLE" type="text" name="CRE_SALLE" size="50px" maxlength="5" placeholder="CRE_SALLE" onblur="verifModifSalle();" /><span id = "erreurmodifsalle" ></span></p>
<p><label for="CRE_HEUREFIN"> Modification heure de fin </label> : <input id="CRE_HEUREFIN" type="time" name="CRE_HEUREFIN" size="50px" maxlength="20" placeholder="CRE_HEUREFIN" /></p>

    
                    <input type="submit" value="valider"/>
                    <input type="reset"/></p>
                    <p></p>

             </form></center>
      </body>
</html>
