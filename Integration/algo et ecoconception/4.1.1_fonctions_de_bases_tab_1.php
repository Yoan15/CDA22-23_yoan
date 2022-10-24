<?php

$tab = [];
$invite;

$invite = readline("veuillez saisir votre type de valeur : ");

function SaisieTab(int $longueur, $invite)
{
    for ($i=0; $i < $longueur; $i++) { 
        $invite = readline("Veuillez saisir une valeur : ");
        echo $invite;
    }
}

SaisieTab(3, $invite);