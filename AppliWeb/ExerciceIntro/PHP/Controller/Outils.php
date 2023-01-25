<?php

/**
 * Fonction qui permet de charger automatiquement les classes dont on a besoin
 *
 */
function chargerClasse($classe)
{
    if (file_exists("PHP/CONTROLLER/CLASSE/". $classe . ".php")) {
        require "PHP/CONTROLLER/CLASSE/" . $classe . ".php";
    }
    if (file_exists("PHP/MODEL/MANAGER/" . $classe . ".php")) {
        require "PHP/MODEL/MANAGER/" . $classe . ".php";
    }
}

function decode($texte)
{
    return $texte;
}