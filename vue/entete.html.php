<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
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
            <ul class="navbar-nav mr-auto">
            <li class="nav-item"><a class="nav-link text-dark " href="./?action=accueil"><img src="image/logo.PNG" height="110" width="400" ></a></li>  
            </ul>
                    <?php 
                    if(isset($_SESSION["UTIL_MAIL"])){
                    if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ADMIN"){ ?>
                    <a type="button" class="btn btn-info " href="./?action=genModifMDP">Changer de mot de passe</a>
                    <a type="button" class="btn btn-danger" href="./?action=deconnexion">Déconnexion</a>
                    <?php } else if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ETAB"){ ?>
                        <a type="button" class="btn btn-info " href="./?action=genModifMDP">Changer de mot de passe</a>
                        <a type="button" class="btn btn-danger" href="./?action=deconnexion">Déconnexion</a>
                    <?php } else if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ENS"){ ?>
                    <a type="button" class="btn btn-info " href="./?action=genModifMDP">Changer de mot de passe</a>
                    <a type="button" class="btn btn-danger" href="./?action=deconnexion">Déconnexion</a>
                <?php } else if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="SADMIN"){ ?>
                        <a type="button" class="btn btn-info " href="./?action=genModifMDP">Changer de mot de passe</a>
                    <a type="button" class="btn btn-danger" href="./?action=deconnexion">Déconnexion</a>

                    <?php }} else { ?>
                        <a href="./?action=deconnexion"><img id="logo" src="image/logo_Rostand.png" alt="logo" height= 120/></a>
                    <?php } ?>
                    
    </nav>

<?php 
if(isset($_SESSION["UTIL_MAIL"])){
if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ADMIN"){ ?>

    
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #19616B;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link text-white " href="./?action=profil">Accueil</a></li>
        <a class="nav-link dropdown-toggle text-white" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                            Admin
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="./?action=listeAdmin">Liste</a>
                            <a class="dropdown-item" href="./?action=addAdmin">Ajouter</a>
                        </div>
        <li class="nav-item"><a class="nav-link text-white " href="./?action=listeCreneauPropo">Créneaux</a></li>
        <li><a class="nav-link text-white">|</a></li>
        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                            Enseignants
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="./?action=listeEnseignant">Liste</a>
                            <a class="dropdown-item" href="./?action=addEns">Ajouter</a>
                        </div>
                    </li>
                    <li><a class="nav-link text-white">|</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Établissement
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="./?action=listeEtablissement">Liste</a>
                            <a class="dropdown-item" href="./?action=addEta">Ajouter</a>
                        </div>
                    </li>
                    <li><a class="nav-link text-white">|</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Matières
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="./?action=listeMatiere">Liste</a>
                            <a class="dropdown-item" href="./?action=addMat">Ajouter</a>
                        </div>
                    </li>
                    <li><a class="nav-link text-white">|</a></li>
                    <li class="nav-item"><a class="nav-link text-white " href="./?action=listeFormation">Mini-Stages</a></li>
                    <li><a class="nav-link text-white">|</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Formations
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="./?action=listeStage">Liste</a>
                            <a class="dropdown-item" href="./?action=addSta">Ajouter</a>
                        </div>
                    </li>
                    <li><a class="nav-link text-white">|</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Inscrits
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="./?action=ListeInscrit">Liste</a>
                            <a class="dropdown-item" href="./?action=genAddIns">Ajouter</a>
                        </div>
                    </li>
                    <li><a class="nav-link text-white">|</a></li>
                    <li class="nav-item"><a class="nav-link text-white " href="./controleur/creationPDFpartage.php" TARGET="_BLANK">PDF ministage</a></li>
                    <li><a class="nav-link text-white">|</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="./?action=choixFormPdf2">Convention de stage</a></li>
    </ul>
  </div>
</nav>
<?php } else if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="SADMIN"){ ?>
    
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #19616B;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link text-white " href="./?action=profil">Accueil</a></li>
        <a class="nav-link dropdown-toggle text-white" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                            Admin
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="./?action=listeSAdmin">Liste</a>
                            <a class="dropdown-item" href="./?action=addAdmin">Ajouter</a>
                        </div>
       
        <li><a class="nav-link text-white">|</a></li>
        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                            Créneaux
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="./?action=listeCreneauAdmin">Liste</a>
                            <a class="dropdown-item" href="./?action=listeCreneauPropo">Créneaux proposé</a>
                            <a class="dropdown-item" href="./?action=addCreAdmin">Ajouter</a>
                        </div>
                    </li>


        <li><a class="nav-link text-white">|</a></li>
        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                            Enseignants
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="./?action=listeEnseignant">Liste</a>
                            <a class="dropdown-item" href="./?action=addEns">Ajouter</a>
                        </div>
                    </li>
                    <li><a class="nav-link text-white">|</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Établissement
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="./?action=listeEtablissement">Liste</a>
                            <a class="dropdown-item" href="./?action=addEta">Ajouter</a>
                        </div>
                    </li>
                    <li><a class="nav-link text-white">|</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Matières
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="./?action=listeMatiere">Liste</a>
                            <a class="dropdown-item" href="./?action=addMat">Ajouter</a>
                        </div>
                    </li>
                    <li><a class="nav-link text-white">|</a></li>
                    <li class="nav-item"><a class="nav-link text-white " href="./?action=listeFormation">Mini-Stages</a></li>
                    <li><a class="nav-link text-white">|</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Formations
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="./?action=listeStage">Liste</a>
                            <a class="dropdown-item" href="./?action=addSta">Ajouter</a>
                        </div>
                    </li>
                    <li><a class="nav-link text-white">|</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Inscrits
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="./?action=ListeInscrit">Liste</a>
                            <a class="dropdown-item" href="./?action=genAddIns">Ajouter</a>
                        </div>
                    </li>
                    <li><a class="nav-link text-white">|</a></li>
                    <li class="nav-item"><a class="nav-link text-white " href="./?action=constante" >Constante</a></li>
                    <li><a class="nav-link text-white">|</a></li>
                    <li class="nav-item"><a class="nav-link text-white " href="./controleur/creationPDFpartage.php" TARGET="_BLANK">PDF ministage</a></li>
                    <li><a class="nav-link text-white">|</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="./?action=choixFormPdf2">Convention de stage</a></li>
    </ul>
  </div>
</nav>

<?php } else if (getTypeUtilisateurByMail($_SESSION["UTIL_MAIL"])=="ETAB"){ ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #19616B;">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link text-white " href="./?action=profil">Accueil</a></li>
        <li class="nav-item"><a class="nav-link text-white " href="./?action=modifProfil">Profil</a></li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Élèves
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
                <a class="dropdown-item" href="./?action=ListeInscrit">Liste</a>
                <a class="dropdown-item" href="./?action=genAddIns">Ajouter</a>
            </div>
        </li>
        <li class="nav-item"><a class="nav-link text-white" href="./?action=choixFormPdf">Convention de stage</a></li>
        <li class="nav-item"><a class="nav-link text-white " href="./controleur/creationPDFpartage.php" TARGET="_BLANK">PDF ministage</a></li>
    </ul>
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
                    <li class="nav-item"><a class="nav-link text-white " href="./?action=modifProfilEns">Profil</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="?action=ListeInscrit">Inscrits</a></li>
                </ul>
            </div>
        </div>
    </nav> 

<?php }} ?>
</nav>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
