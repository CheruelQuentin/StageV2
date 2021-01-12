<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <title>Mini-stages - Lycée Jean Rostand</title>
        <style type="text/css">
            @import url("css/base.css");
        </style>
    </head>
<body>
    <!-- <div id="test"><p><img src="image/logo_Rostand.png"width=100px; height=100px/></p>
    <div id="test"><p><img src="image/Home.png"width=100px; height=100px /></p>
    <div id="test"><p><a href="">Accueil</a></p>
    <div id="test2"><p><img src="image/admin.png"width=100px; height=100px /></p>
    <div id="test"><p><a href="">Admin</a></p> -->

<nav>
            
            <ul id="menuGeneral">

                <li><a href="http://rostand.etab.ac-caen.fr/"><img id="logo" src="image/logo_entete.png" alt="logo" /></a></li>
                <?php if(isLoggedOn()){ ?>
                <li><a href="./?action=profil"><img src="image/Home.png" alt="maison" />Accueil</a></li>
                <?php } else{?>
                <li></li>
                <?php } ?>
                <li></li>
                <li><h1 style="color:white; font-size: 30px; margin-top:0px;">Mini-Stage</h1></li>
                <li></li>
                <li><button id="bouton2" type="button" style="width:300px;" onclick="window.location.href='./?action=modifMdp'"> Changer de mot de passe </button></li>
                 
                <?php if(isLoggedOn()){ ?>
                <li><a href="./?action=deconnexion"><img src="image/profil.png" alt="" />Déconnexion</a></li>
                <?php } 
                else{ ?>
                <li><a href="./?action=connexion"><img src="image/profil.png" alt="" />Connexion</a></li>
                <?php } ?>
                
                
            </ul>
    </nav>
<?php 
if(isset($_SESSION["UTIL_MAIL"])){
if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ADMIN"){ ?>
    <nav>
<ul id="menuGeneral">

<li><button id="bouton1" type="button" style="width:250px;" onclick="window.location.href='./?action=listeCreneauPropo'"> Gestion des créneaux </button></li>
<li><button id="bouton1" type="button" style="width:300px;" onclick="window.location.href='./?action=listeEleve2'"> Gestion des élèves </button></li>
<li><button id="bouton1" type="button" style="width:300px;" onclick="window.location.href='./?action=listeEnseignant'"> Gestion des enseignants </button></li>
<li><button id="bouton1" type="button" style="width:300px;" onclick="window.location.href='./?action=listeEtablissement'"> Gestion des établissements </button></li>
<li><button id="bouton1" type="button" style="width:300px;" onclick="window.location.href='./?action=listeMatiere'"> Gestion des matières </button></li>
<li><button id="bouton1" type="button" style="width:300px;" onclick="window.location.href='./?action=listeFormation'"> Gestion des formations </button></li>
<li><button id="bouton1" type="button" style="width:300px;" onclick="window.location.href='./?action=listeStage'"> Gestion des mini-stages </button></li>
<li><button id="bouton1" type="button" style="width:300px;" onclick="window.location.href='./?action=listeInscription'"> Gestion des stagiaires </button></li>
</ul>

<?php } else if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ETAB"){ ?>
<ul id="menuGeneral">
    <li></li>
    <li><button id="bouton1" type="button" style="width:300px;" onclick="window.location.href='./?action=listeEleve'"> Gestion des élèves </button></li>
<li><button id="bouton1" type="button" style="width:300px;" onclick="window.location.href='./?action=listeInscription'"> Liste des inscrits </button></li>
<li><button id="bouton1" type="button" style="width:300px;" onclick="window.location.href='./?action=listeEnseignant'"> Gestion des enseignants </button></li>
<li><button id="bouton1" type="button" onclick="window.location.href='controleur/creationPDFLycee.php'"> Generer PDF</button></li>

</ul>
<?php } else if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ENS"){ ?>
<ul id="menuGeneral">
<li></li>
<li></li>
<li><button id="bouton1" type="button" style="width:300px;" onclick="window.location.href='./?action=listeCreneau'"> Gestion proposition créneau </button></li>
<li><button id="bouton1" type="button" style="width:300px;" onclick="window.location.href='./?action=listeInscription2'"> Liste des inscrits </button></li>
<li></li>

<li></li>
</ul>
<?php }} ?>
</nav>

    