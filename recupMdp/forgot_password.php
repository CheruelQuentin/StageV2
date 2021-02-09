
<?
require "../modele/bd.inc.php"
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Récupération du mot de passe</title>
  </head>
  <body>
    <br>
   <center> <h2>Mot de passe oublié</h2></center>
   <br>
    <form method="post">
      
       <center> <table><tr><td>
        <label for="email"style="width:220px;"><b>Entrer votre adresse mail :</b></label>
     <input type="email" placeholder="Mail" name="email" required>
   <br><br>
   <center>
       <input type="submit" style="padding : 10px; width: 100px" value="Valider"/></center>
      
    </form>
  </body>
</html>

<?php
if(isset($_POST['email']))
{
  $password = uniqid();
  
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  $message = "Bonjour, vous trouverez ci-joint votre nouveau mot de passe.
  Veuillez lors de votre prochaine connexion changer votre mot de passe en allant dans l'onglet 'Changer de mot de passe'.
  Votre nouveau mot de passe est $password 

  Cordialement";
  $headers ='Content-Type: text/plain; charset="utf-8"'." ";

if(mail($_POST['email'],'mot de passe oublié', $message, $headers))
{


 try {
        $cnx = connexionPDO();
        $req = $cnx->prepare("update utilisateur set UTIL_MDP = ? where UTIL_MAIL = ? ");
        $req->execute([$hashedPassword , $_POST['email']]);


} 
catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage();
        die();
    }

/*

$sql = "update utilisateur set UTIL_MDP = ? where UTIL_MAIL = ? ";
$stmt = $cnx->prepare($sql);
$stmt->execute([$hashedPassword , $_POST['email']]);
echo "mail envoyé";*/

}
else{
  echo "erreur lors de l'envoie";
}
}


?>