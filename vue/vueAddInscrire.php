<br><center><h2 id="titre">Inscription des élèves à une formation</h2></center>
	<body>
    <center><h2>Formulaire d'ajout </h2></center>
<br><br>
<p></p>
<link rel="stylesheet" type="text/css" href="css/style.css">
 <form method="post" action="./?action=insertIns">
 <style type="text/css">
            @import url("css/form.css");
</style>
<center>
	<table><tr><td>
  <p><label for="INS_ELE">Eleve : </label>
  <select name="INS_ELE">
			<?php
				for($i=0;$i<sizeof($eleves);$i++){ ?> 
					<option value= <?= $eleves[$i]['ELE_ID'];?> > 
						<?= $eleves[$i]['ELE_NOM'], " , ", $eleves[$i]['ELE_PRENOM'];?>
					</option> 
			<?php } ?>
		</select>
</p>



<p>Veuillez sélectionner un stage *: </p>
<div id="choixForm">
		<fieldset class="scheduler-border">    
        	<legend class="scheduler-border">Choisir les ministages suivi par l’élève</legend>           

        <?php
				for($i=0;$i<sizeof($stage);$i++){ ?> 
					<input type="checkbox" name="choixForm[]" value=<?= $stage[$i]['STA_ID'];?>>&nbsp;&nbsp;&nbsp;
					<?= '<i style="color:blue;">Formation</i> ',getFormationById($stage[$i]['STA_FORM'])['FORM_LIBELLE'], '<i style="color:blue;"> Matière</i> ', getMatiereById($stage[$i]['STA_MAT'])['MAT_LIBELLE'], '<i style="color:blue;"> Date</i> ', getCreneauById($stage[$i]['STA_CRE'])['CRE_DATE'], '<i style="color:blue;"> Heure</i> ',substr(getCreneauById($stage[$i]['STA_CRE'])['CRE_HEUREDEB'],0,-3);?>
					<br><br>
					
			<?php } ?>          
    	</fieldset>
	</div>





	</p></td></tr></table><br>
			        			        <input type="submit" style="padding : 10px; width: 100px" value="Valider"/>
				    <input type="reset" style="padding : 10px; width: 100px"/></p>
</form>

 