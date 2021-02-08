	<body><br>
			<center><h2 id="titre">Gestion des Établissements</h2></center><br>
    <center><h2>Formulaire d'ajout </h2><br>
<script src="js/verification.js"> </script>
<p></p>
 <form method="post" action="./?action=insertEta">

<table><tr><td> 
<p><label for="ETA_NOM"style="width:220px;"> Nom établissement *: </label><input id="ETA_NOM" type="text" name="ETA_NOM" size="50px" maxlength="150" placeholder="ex : Jean Rostand" required/></p>


<p><label for="ETA_VILLE"style="width:220px;"> Ville établissement *: </label><input id="ETA_VILLE" type="text" name="ETA_VILLE" size="50px" maxlength="150" placeholder="ex : Caen" required/></p>

<p><label for="ETA_ADRESSE" style="width:220px;"> Adresse établissement *: </label><input id="ETA_ADRESSE" type="text" name="ETA_ADRESSE" size="50px" maxlength="150" placeholder="ex : 98 route d'ifs" required /></p>
<br>
<p><label for="ETA_CP"style="width:220px;"> Code postal *: </label><input id="ETA_CP" type="text" name="ETA_CP" size="50px" maxlength="6" pattern="[0-9]{5}" placeholder="ex : 14000" required /></p>

<p><label for="ETA_MAIL"style="width:220px;"> E-Mail établissement *: </label><input id="ETA_MAIL" type="email" name="ETA_MAIL" size="50px" placeholder="Ex : rostand@lycee.fr" maxlength="150" required /></p>
	<br>
<p>Civilité du proviseur:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<input type="radio" name="ETA_PROVCIVIL" value="M." for="M.">M.</label>
<input type="radio" name="ETA_PROVCIVIL" value="Mme." for="Mme.">Mme.</label></center></p>

<p><label for="ETA_PROVNOM"style="width:220px;"> Nom du proviseur *: </label><input id="ETA_PROVNOM" type="text" name="ETA_PROVNOM" size="50px" maxlength="150"   placeholder="ex : Duval-Rocher" required/></p>

<p><label for="ETA_PROVPRENOM"style="width:220px;"> Prénom du proviseur *: </label><input id="ETA_PROVPRENOM" type="text" name="ETA_PROVPRENOM" size="50px" maxlength="150" placeholder="ex : Sébastien" required /></p>
<br>
<p><label style="width:220px;" for="ETA_TEL"> Téléphone *: </label><input id="ETA_TEL" type="tel" name="ETA_TEL" size="50px" maxlength="14" required pattern=[0-9]{10}  placeholder="ex : 0153322327" /></p>
<br>
<p><label for="ETA_SECU"style="width:220px;"> N° Assurance *: </label><input id="ETA_SECU" type="text" name="ETA_SECU" size="50px" maxlength="15"/>

<p>Type de sécu*:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="ETA_NOMSECU" value="MAE"  for="MAE"> MAE</label>

<input type="radio" name="ETA_NOMSECU" value="MAIF"  for="MAIF"> MAIF</label>
</p>

<p><label for="ETA_CATEG"style="width:220px;"> Type d'établissement *: </label> <br>
			<select  required name="ETA_CATEG">
			<?php
				for($i=0;$i<sizeof($categeta);$i++){ ?> 
					<option value= <?= $categeta[$i]['CAT_ID'];?> > 
						<?= $categeta[$i]['CAT_LIBELLE']; ?> </option> 
			<?php } ?>
		</select>

<p><label for="ETA_MDP"style="width:220px;"> Mot de passe *: </label><input id="ETA_MDP" type="password" name="ETA_MDP" size="50px" maxlength="200" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
  title=" Doit contenir au moins un chiffre et une lettre majuscule et minuscule, et au moins 8 caractères ou plus" />
<p><label for="ETA_MDP2"style="width:220px;"> Confirmation mot de passe *: </label><input id="ETA_MDP2" type="password" name="ETA_MDP2" size="50px" maxlength="200"/>



</td><tr></table>
	<p>* Champs obligatoire</p>
<input type="submit" style="padding : 10px; width: 200px" value="valider"/>
</form>