<?php

$age = readline("Veuillez saisir votre âge : ");
$permis = readline("Depuis quand avez-vous votre permis ? ");
$accidents = readline("Combien d'accidents avez-vous eu avec votre véhicule ?");
$fidelite = readline("Êtes-vous membre depuis plus de 1 an ?");

$points = 0;
$tarifs = array(4 => "Bleu", 
                3 => "Vert", 
                2 => "Orange", 
                1 => "Rouge",
                0 => "Refus");

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