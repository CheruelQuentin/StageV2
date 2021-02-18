<div style="text-align:right;padding-bottom:5px;">
<br>
<center><h2 id="titre">Gestion des Admin</h2></center><br>
<button onclick="window.location.href='./?action=addAdmin';" id="bouton2" style="display:inline-block;">Ajouter</button>
</div>
<link rel="stylesheet" type="text/css" href="css/liste.css">
<table class="table">
        <thead>
            
            <th align="center">Mail</th>
            
         </thead>
         <tbody>


<?php


for ($i = 0; $i < count($listeAdmin); $i++) {

    ?>
   
        <tr>
            <td><center><?= $listeAdmin[$i]["UTIL_MAIL"] ?></center></td>
        </tr>
    <?php
}
?>
</tbody></table>