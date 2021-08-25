<?php
   include('fb.php');

$s = "";
function verifieEmail($mail) 
{
	if (preg_match('/^[a-zA-Z0-9_]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$]/i',$mail)) return false;
	list ($nom,$domaine) = explode ('@',$mail);
	if (getmxrr($domaine,$mxhosts)) return true;
	else return false;
} 
if (!empty($_POST['nom']) && !empty($_POST['mail']) && !empty($_POST['subject']) && !empty($_POST['message']))
{
    $destinataire = "ska.fluides@gmail.com";
    $sujet = "CLIENT DU SITE SKA FLUIDES ";
    $message = "Nom et prénom: ".$_POST['nom']."\r\n";
    $message .= "Adresse email : ".$_POST['mail']."\r\n";
    $message .= "sujet : ".$_POST['subject']."\r\n";
    $message .= "Message : ".$_POST['message']."\r\n";
    $from = $_POST['mail'];
    if (verifieEmail($from))
    {
        $entete = 'From: '.$from;
        if (mail($destinataire,$sujet,$message,$entete))
        {
            $s =  $lang['msgs']; 
            require_once "contact.php";


        }
        else
        {
            $s = "Une erreur s'est produite. Votre demande n'a pas été envoyée.";
            require_once "contact.php";

          }
    }
    else
    {
        $s =  $lang['msgs2']; 
        require_once "contact.php";

      }

}
else
{
    $s =  $lang['msgs3']; 
    require_once "contact.php";
  }


?>