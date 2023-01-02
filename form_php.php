<?php 
 
    $name_error = $mail_error= $mess_error = $website_error = "";
    $name = $mail = $objet = $message = $mess_ok = $contenu =  $website= "";
  if(isset($_POST['submit'])) {
       
    if($_SERVER["REQUEST_METHOD"] == "POST") {

            if ($_POST["website"] != "")  {
                unset($_POST["submit"]);
                $_POST["website"] = "";
                $mailTo = "contact@elphegeproisy.com";
                $subject = "Message de mon PorteFolio";
                $contenu =  "Une tentative de spam a été déjoué par le site.";
                if(mail($mailTo,$subject,$contenu)){
                $name = $mail = $objet = $message = "";
                header("Location: pageRobot.php"); 
                exit;  
             }
            }

            else {           
                if(empty($_POST["nom"])) {
                $name_error = "Ce champ est requis, vous devez nous indiquer vore nom.";
            }
            else  {
                $name = sanit($_POST["nom"]);
                if(!preg_match("/^[a-zA-ZÀ-ÿ ]*$/", $name))  {
                    $name_error = "Votre nom ne doit être composé que de lettres et d'espaces."; 
                }
            }

            if(empty($_POST["email"])) {
                $mail_error = "Ce champ est requis, vous devez entrer un email valide.";
            }
            else  {
                $mail = sanit($_POST["email"]);
                if(!filter_var($mail,FILTER_VALIDATE_EMAIL))  {
                    $mail_error = "Votre email n'a pas le format requis. Veuillez le vérifier."; 
                }
            }
            
            if(!empty($_POST["sujet"])) {
                $objet= sanit($_POST["sujet"]);
            }
            else {
                $objet = "Sans Objet";
            }

            if(empty($_POST["mess"])) {
                $mess_error="Quel est votre message? Ce champ est requis.";
            }
            else  {
                $message = sanit($_POST["mess"]);
            }

            if($name_error == "" and $mail_error == "" and $mess_error == "")  {
                unset($_POST["submit"]);
                $mailTo = "contact@elphegeproisy.com";
                $subject = "Message de mon PorteFolio";
                $contenu =  "Ce message a été envoyé automatiquement depuis le formulaire.\n\n Contact : ".$name.
                "\n Adresse e-mail: ".$mail. "\n Objet du message: ".$objet. "\n\n" .$message. "\n"; 
                
                if(mail($mailTo,$subject,$contenu))  { 
                $color_mess ="email_success";
                $mess_ok = "Votre message a bien été envoyé,\n nous vous envoyons un mail de confirmation à l'adresse que vous nous avez indiquée.";
                
                $retourClient = "Bonjour, nous avons bien reçu votre message, nous allons le traiter dans les plus brefs délais. \n\n
                
                Bien cordialement,\n 
                Elphège PROISY \n\n 
                
                Ceci est un message automatique, merci de ne pas répondre à ce message.";
                
                mail($mail,$subject,$retourClient);
                $name = $mail = $objet = $message = "";
                }
                else  {
                    $color_mess = "error";
                    $mess_ok = "L'envoi du message a échoué. Veuillez réessayer ultérieurement.";
                }
            }
            
         }
    }
}

  function sanit($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }

  ?>