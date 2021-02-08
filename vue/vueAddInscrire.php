<center><h2 id="titre">Inscription des élèves à une formation</h2></center>
	<body>
    <center><h2>Formulaire d'ajout </h2></center>

<p></p>
<link rel="stylesheet" type="text/css" href="css/style.css">
 <form method="post" action="./?action=insertIns">

<center>
	<table><tr><td>
  <p><label for="INS_ELE">Eleve : </label>
  <select name="INS_ELE">
			<?php
				for($i=0;$i<sizeof($eleves);$i++){ ?> 
					<option value= <?= $eleves[$i]['ELE_ID'];?> > 
						<?= getEleveByIdByEtab($eleves[$i]['ELE_ID'])['ELE_NOM'], " , ", getEleveByIdByEtab($eleves[$i]['ELE_ID'])['ELE_PRENOM'];?>
					</option> 
			<?php } ?>
		</select>
</p>



<p>Veuillez sélectionner un stage *: </p>
	<div id="choixForm">
		<fieldset class="scheduler-border">    
        	<legend class="scheduler-border">Stage</legend>           
            <?php
				for($i=0;$i<sizeof($stage);$i++){ ?> 
					<input required type="radio"name="choixForm[]"value= <?= $stage[$i]['STA_ID'];?>
					><?= getFormationById($stage[$i]['STA_FORM'])['FORM_LIBELLE'], ", ", getMatiereById($stage[$i]['STA_MAT'])['MAT_LIBELLE'], " - ", getCreneauById($stage[$i]['STA_CRE'])['CRE_HEUREDEB']; ?>
					<br> 
					<br>		
			<?php } ?>          
    	</fieldset>
	</div>





	</p></td></tr></table><br>
	<input type="submit" value="valider"/>
	<input type="reset"/></center>
</form>

 