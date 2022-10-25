<?php

function Epeler($mot)
{
    echo $mot;
    $premiereLettre = substr($mot,1);
    echo $premiereLettre;
    $derniereLettre = substr($mot, -1);
    echo $derniereLettre;

}

$mot = readline("Veuillez saisir un mot à épeler : ");

echo Epeler($mot);