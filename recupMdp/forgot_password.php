
<?
require "../modele/bd.inc.php"
?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recuperation mot de passe</title>
  </head>
  <body>
    <h2>Forgot password</h2>
    <form method="post">
      <div class="container">
        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" required>
        <button type="submit">Send me a random password</button>
      </div>
    </form>
  </body>
</html>

<?php
if(isset($_POST['email']))
{
  $password = uniqid();
  
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  $message = "bonjour, voici votre nouveau mot de passe: $password";
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