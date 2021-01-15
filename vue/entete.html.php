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
                <li></li>
                 
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <nav class="navbar navbar-light" style="background-color: #729FCF;">
    <form class="form-inline">
        <button id="bouton1" type="button" style="width:350px;" onclick="window.location.href='./?action=listeCreneauPropo'"> Gestion des créneaux </button>
        <button id="bouton1" type="button" style="width:350px;" onclick="window.location.href='./?action=listeEleve2'"> Gestion des élèves </button>
        <button id="bouton1" type="button" style="width:350px;" onclick="window.location.href='./?action=listeEnseignant'"> Gestion des enseignants </button>
        <button id="bouton1" type="button" style="width:350px;" onclick="window.location.href='./?action=listeEtablissement'"> Gestion des établissements </button>
        <button id="bouton1" type="button" style="width:350px;" onclick="window.location.href='./?action=listeMatiere'"> Gestion des matières </button>
        <button id="bouton1" type="button" style="width:350px;" onclick="window.location.href='./?action=listeFormation'"> Gestion des mini-stage </button>
        <button id="bouton1" type="button" style="width:350px;" onclick="window.location.href='./?action=listeStage'"> Gestion des formations </button>
        <button id="bouton1" type="button" style="width:350px;" onclick="window.location.href='./?action=listeInscription3'"> Gestion des stagiaires </button>
        <button id="bouton1" type="button" style="width:350px;" onclick="window.location.href='./controleur/creationPDFpartage'"> Generer PDF pour les etab</button>
        <button id="bouton2" type="button" style="width:350px;" onclick="window.location.href='./?action=modifMdp'"> Changer de mot de passe </button>
    </form>
</nav>

<?php } else if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ETAB"){ ?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <nav class="navbar navbar-light" style="background-color: #729FCF;">
    <form class="form-inline">
    <button id="bouton1" type="button" style="width:300px;" onclick="window.location.href='./?action=listeEleve'"> Gestion des élèves </button>
    <button id="bouton1" type="button" style="width:300px;" onclick="window.location.href='./?action=listeInscription'"> Liste des inscrits </button>
    <button id="bouton1" type="button" style="width:300px;" onclick="window.location.href='./?action=listeEnseignant'"> Gestion des enseignants </button>
    <button id="bouton1" type="button" style="width:300px;" onclick="window.location.href='controleur/choixFormPdf'"> Generer PDF</button>
    <button id="bouton2" type="button" style="width:350px;" onclick="window.location.href='./?action=modifMdp'"> Changer de mot de passe </button>
    </form>
</nav>

<?php } else if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ENS"){ ?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <nav class="navbar navbar-light" style="background-color: #729FCF;">
    <form class="form-inline">
    <button id="bouton1" type="button" style="width:300px;" onclick="window.location.href='./?action=listeCreneau'"> Gestion proposition créneau </button>
    <button id="bouton1" type="button" style="width:300px;" onclick="window.location.href='./?action=listeInscription2'"> Liste des inscrits </button>
    <button id="bouton2" type="button" style="width:350px;" onclick="window.location.href='./?action=modifMdp'"> Changer de mot de passe </button>
    </form>
</nav>

<?php }} ?>
</nav>

    