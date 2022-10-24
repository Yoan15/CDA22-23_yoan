<?php

$tab = [];

function SaisieTab(int $longueur, $invite)
{
    $longueur = readline("Veuillez définir la longueur du tableau : ");
    echo $longueur;
    $invite = readline("veuillez saisir un type : ");
    echo $invite;
}