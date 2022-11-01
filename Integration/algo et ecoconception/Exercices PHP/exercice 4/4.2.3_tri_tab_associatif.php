<?php

$tab = array(
            4 => "Vincent",
            2 => "Laurent",
            1 => "Anne",
            3 => "Julien",
            5 => "Lara"
            );
//tri clé ordre croissant
//ksort($tab);

//tri clé ordre décroissant
//krsort($tab);

//tri valeurs ordre croissant
//sort($tab);


//tri valeurs ordre décroissant
rsort($tab);
foreach ($tab as $key => $valeur) {
    echo $key . "=" . $valeur . "\n";
}