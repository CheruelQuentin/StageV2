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
                <li><a href="./?action=profil"><img src="image/Home.png" alt="maison" />Profil</a></li>
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

    