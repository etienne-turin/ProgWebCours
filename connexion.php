<?php
session_start();

$retour = new stdClass();
$retour -> success = false;
$retour -> message = "Mauvais identifiant ou mot de passe";
if(isset($_POST['username']))
{
    if(isset($_POST['password']))
    {
        /* ok -> regarder en base s'il existe */
        if(($_POST['username'] === "o") && ($_POST['password'] === "o"))
        {
            /* ICI ONS IMULE QU'ON L'A TROUVE */
            $retour -> success = true;
            $retour -> message = "Bienvenido Señor Etienne TURINO";

            
        }
    }
}

header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: application/json');
echo json_encode($retour);