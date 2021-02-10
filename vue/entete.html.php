<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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

            
                
    <nav class="navbar navbar-light " style="background-color: #7FACB2;">
        <a href="http://172.20.82.34/ministage/?action=deconnexion"><img id="logo" src="image/logo_entete.png" alt="logo" height= 100/></a>
            <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link text-dark "><h1> Mini-Stage </h1></a></li>
            </ul>
                    <?php 
                    if(isset($_SESSION["UTIL_MAIL"])){
                    if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ADMIN"){ ?>
                    <a type="button" class="btn btn-info " href="./?action=modifMdpAdmin">Changer de mot de passe</a>
                    <a type="button" class="btn btn-danger" href="./?action=deconnexion">Déconnexion</a>
                    <?php } else if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ETAB"){ ?>
                        <a type="button" class="btn btn-info " href="./?action=modifMdpEtablissement">Changer de mot de passe</a>
                        <a type="button" class="btn btn-danger" href="./?action=deconnexion">Déconnexion</a>
                    <?php } else if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ENS"){ ?>
                    <a type="button" class="btn btn-info " href="./?action=modifMdpEnseignant">Changer de mot de passe</a>
                    <a type="button" class="btn btn-danger" href="./?action=deconnexion">Déconnexion</a>
                    <?php }} ?>
                    
    </nav>

<?php 
if(isset($_SESSION["UTIL_MAIL"])){
if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ADMIN"){ ?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #19616B;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">

                    <li class="nav-item"><a class="nav-link text-white " href="./?action=profil">Accueil</a></li>
                    <li class="nav-item"><a class="nav-link text-white " href="./?action=addAdmin">Admin</a></li>
                    <li class="nav-item"><a class="nav-link text-white " href="./?action=listeCreneauPropo">Créneaux</a></li> 
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                            Enseignants
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="./?action=listeEnseignant">Liste</a>
                            <a class="dropdown-item" href="./?action=addEns">Ajouter</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Établissement
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="./?action=listeEtablissement">Liste</a>
                            <a class="dropdown-item" href="./?action=addEta">Ajouter</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Matières
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="./?action=listeMatiere">Liste</a>
                            <a class="dropdown-item" href="./?action=addMat">Ajouter</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link text-white " href="./?action=listeFormation">Mini-Stages</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Formations
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="./?action=listeStage">Liste</a>
                            <a class="dropdown-item" href="./?action=addSta">Ajouter</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Inscrits
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="./?action=listeInscription3">Liste</a>
                            <a class="dropdown-item" href="./?action=addIns2">Ajouter</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link text-white " href="./controleur/creationPDFpartage.php">PDF ministage</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="./?action=choixFormPdf2">Convention de stage</a></li>
                </ul>
            </div>
        </div>
    </nav> 

<?php } else if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ETAB"){ ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #19616B;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link text-white " href="./?action=profil">Accueil</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Elèves
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="./?action=listeEleve">Liste</a>
                            <a class="dropdown-item" href="./?action=addEle">Ajouter</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Inscrits
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="./?action=listeInscription">Liste</a>
                            <a class="dropdown-item" href="./?action=addIns">Ajouter</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link text-white" href="./?action=choixFormPdf">Convention de stage</a></li>
                    <li class="nav-item"><a class="nav-link text-white " href="./controleur/creationPDFpartage.php">PDF ministage</a></li>
                </ul>
            </div>
        </div>
    </nav> 

<?php } else if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ENS"){ ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #19616B;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link text-white " href="./?action=profil">Accueil</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Créneaux
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="./?action=listeCreneau">Liste</a>
                            <a class="dropdown-item" href="./?action=addCre">Ajouter</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav> 

<?php }} ?>
</nav>

    