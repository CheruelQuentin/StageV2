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


             <form method="post" action="./?action=upCre">
<center>
  <table><tr><td>     
<div>
<p> 
 <input id="CRE_ID" type="hidden" name="CRE_ID" size="50px" maxlength="20" value="<?=$_GET['id']?>" /></p>
<p><label for="CRE_DATE"> Modification date </label> : <input id="CRE_DATE" type="date" name="CRE_DATE" size="50px" maxlength="20" value="<?=$date?>" /></p><br>
<p><label for="CRE_DATEFIN"> Modification date de fin </label> : <input id="CRE_DATEFIN" type="date" name="CRE_DATEFIN" size="50px" maxlength="20" value="<?=$datefin?>" /></p><br>
<p><label for="CRE_HEUREDEB"> Modification Heure de début </label> : <input id="CRE_HEUREDEB" type="time" name="CRE_HEUREDEB" size="50px" maxlength="20" value="<?=$heureDeb?>" /></p><br>
<br>
<p><label for="CRE_SALLE"> Modification salle </label> : <input id="CRE_SALLE" type="text" name="CRE_SALLE" size="50px" maxlength="5"  required  value="<?=$salle?>" onblur="verifModifSalle();" /><div></div><span id = "erreurmodifsalle" ></span></div><br>
<p><label for="CRE_HEUREFIN"> Modification heure de fin </label> : <input id="CRE_HEUREFIN" type="time" name="CRE_HEUREFIN" size="50px" maxlength="20" value="<?=$heureFin?>" /></p>

  </td></tr></table><br>
                    <input type="submit" style="padding : 10px; width: 200px" value="valider"/>

                    <p></p>
</div></center>
             </form></center>
      </body>
</html>
