<?php

$age = readline("Veuillez saisir votre âge : ");
$permis = readline("Depuis quand avez-vous votre permis ? ");
$accidents = readline("Combien d'accidents avez-vous eu avec votre véhicule ?");
$fidelite = readline("Êtes-vous membre depuis plus de 1 an ?");

$points = 0;
$tarifs = array("Rouge",
                "Orange",
                "Vert",
                "Bleu");

if ($accidents < 3) {
    if ($age > 25) {
        $points++;
    }

    if ($permis > 2) {
        $points++;
    }

    $points -= $accidents;

    if ($fidelite === "oui" && $points >= 0) {
        $points++;
    }
    
    if ($points >= 0) {
        echo "Vous pouvez être assuré au niveau ". $tarifs[$points] .".";
    } else {
        echo "vous ne pouvez pas être assuré.";
    }

}else {
    echo "vous ne pouvez pas être assuré.";
}