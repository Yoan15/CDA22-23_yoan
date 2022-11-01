<?php

$genre = readline("Veuillez saisir votre genre (homme ou femme) : ");
$age = readline("Veuillez saisir votre age : ");

if (($genre === "homme" && $age > 20) || ($genre === "femme" && $age >= 18 && $age <= 35)) {
    echo "Imposable";
} else {
    echo "Non imposable";
}
