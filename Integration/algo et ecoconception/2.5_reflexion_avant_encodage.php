<?php

$age = readline("Veuillez saisir votre âge : ");
$permis = readline("Depuis quand avez-vous votre permis ? ");
$accidents = readline("Combien d'accidents avez-vous eu avec votre véhicule ?");
$fidelite = readline("Êtes-vous membre depuis plus de 1 an ?");

$points = 0;

if ($accidents < 3) {
    if ($age > 25) {
        $points++;
    }

    if ($permis > 2) {
        $points++;
    }

    if ($fidelite === "oui") {
        $points++;
    }

    $points -= $accidents;
    echo $points;
    
}else {
    echo "vous ne pouvez pas être assuré.";
}