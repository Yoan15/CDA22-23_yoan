<?php

function chargerClasse($classe)
{
    require $classe. '.class.php';
}

spl_autoload_register('ChargerClasse');

function demarrerJeu($trace)
{

    $monHeros = new Joueur(["pv" => 50, "nom" => "MonHeros"]); //initialisation du Héros

}

demarrerJeu($trace);