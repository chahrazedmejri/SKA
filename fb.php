<?php
if(!isset($_SESSION))
{
    session_start();
}

if(!isset($_SESSION['lang']))

    $_SESSION['lang']="fr";

elseif( isset($_GET['lang'])   && $_SESSION['lang'] != $_GET['lang'] && !empty($_GET['lang']))
{
    if($_GET['lang'] =="en")

    $_SESSION['lang']='en';

    elseif($_GET['lang'] =="fr")

    $_SESSION['lang'] ='fr';

    elseif($_GET['lang'] =="ar")

    $_SESSION['lang'] ='ar';


}
require_once( $_SESSION['lang'] . ".php");
?>