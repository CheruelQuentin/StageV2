<?php
if ( $_SERVER["SCRIPT_FILENAME"] == __FILE__ ){

}
include_once "modele/bd.utilisateur.inc.php";
include_once "modele/bd.inc.php";


	$cnx = connexionPDO();

	if(isset($_GET['code'])){
		$code=$_GET['code'];
	}

	if(isset($_POST["recupSubmit"], $_POST["recupMail"])){ //Si le formulaire a été submit
		if(!empty($_POST["recupMail"])){	//Si le champ mail n'est PAS vide
			$recupmail=htmlspecialchars($_POST["recupMail"]);

			if(filter_var($recupmail, FILTER_VALIDATE_EMAIL)){ //Si il y a des caractères spécifiques aux mails (@ / .)
				$mailexiste = $cnx -> prepare('SELECT UTIL_MAIL from utilisateur WHERE UTIL_MAIL=?');
				$mailexiste -> execute(array($recupmail)); // recup de tous les utilisateurs ayant un mail correspondant.
				$mailexiste = $mailexiste -> rowCount(); //Compte le nbr d'utilisateurs ayant cette adresse mail (normalement 1 ou 0)

				if ($mailexiste == 1){	//Si l'adresse correspond à un seul utilisateur
					$recupmail = $_POST["recupMail"];
					$recupcode = "";	//Initialisation du code

					for ($i=0; $i < 8 ; $i++) { //Création du code composé de 8 chiffres
						$recupcode .= mt_rand(0,9); //random entre 0 et 9
					}
					
					$mail_recup_existe = $cnx -> prepare('SELECT UTIL_MAIL FROM utilisateur WHERE UTIL_MAIL = ?');
					$mail_recup_existe -> execute(array($recupmail)); // recup de toutes les demandes de récup ayant un mail correspondant.
					$mail_recup_existe = $mail_recup_existe -> rowCount(); //Compte le nbr de récupération ayant cette adresse mail (normalement 1 ou 0)

					
		/////////////////CONTENU MAIL (A adapter sur la version externe)///////////////////
	         $header.='From:"[Lycée Jean Rostand]"<votremail@mail.com>'."\n";
	         $header.='Content-Type:text/html; charset="utf-8"'."\n";
	         $header.='Content-Transfer-Encoding: 8bit';
	         $message = '
	         <html>
	         <head>
	           <title>Récupération de mot de passe - Gestion Stages Lycée Jean Rostand</title>
	           <meta charset="utf-8" />
	         </head>
	         <body>
	           <font color="#303030";>
	             <div align="center">
	               <table width="600px">
	                 <tr>
	                   <td>
	                     
	                     <div align="center">Bonjour</div>
	                     Cliquez <a href="http://localhost/sites_BTS/projet/?action=code&code="'.$recupcode.'">ici afin de redéfinir un mot de passe.<br/>
	                     
	                   </td>
	                 </tr>
	                 <tr>
	                   <td align="center">
	                     <font size="2">
	                       Ceci est un e-mail automatique, merci de ne pas y répondre.
	                     </font>
	                   </td>
	                 </tr>
	               </table>
	             </div>
	           </font>
	         </body>
	         </html>
	         ';
	         mail($recupmail, "Récupération de mot de passe - Gestion Stages Lycée Jean Rostand", $message, $header);
	            header("Location:");

				} else{
					$erreur = "Cette adresse n'est pas enregistrée.";
				}

			} else{
				$erreur = "Adresse mail incorrecte."; //Sinon adresse mail incorrecte
			}

		}else{
			$erreur = "Veuillez saisir votre adresse mail."; //Si le champ de mail est vide
		}
	}


                

// appel du script de vue qui permet de gerer l'affichage des donnees
$titre = "recupMdp";
include "vue/entete.html.php";
include "vue/vueRecupMDP.php";
include "vue/pied.html.php";

// Vidéo à la 24eme minute https://www.primfx.com/tuto-php-mot-passe-oublie-231/
?>


