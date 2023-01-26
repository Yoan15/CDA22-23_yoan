<?php
/* Autoload permet de charger toutes les classes necessaires */
function ChargerClasse($classe)
{
    if (file_exists("PHP/CONTROLLER/CLASSE/" . $classe . ".Class.php")) {
        require "PHP/CONTROLLER/CLASSE/" . $classe . ".Class.php";
    }
    if (file_exists("PHP/MODEL/MANAGER/" . $classe . ".Class.php")) {
        require "PHP/MODEL/MANAGER/" . $classe . ".Class.php";
    }
}


function crypte($mot) //fonction qui crypte le mot de passe
{
    return md5(md5($mot) . strlen($mot));
}
// A coder pour décoder les informations base de données dans le json
function decode($texte)
{
    return $texte;
}
