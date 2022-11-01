<?php

$age = readline("veuillez saisir votre age : ");

if ($age < 6) {
    echo "Vous êtes trop jeune!";
}elseif ($age < 8) {
    echo "poussin";
}elseif ($age < 10) {
    echo "pupille";
}elseif ($age < 12) {
    echo "minime";
}elseif ($age >= 12) {
    echo "cadet";
}

/**
 * correction
 * $userAge = readline("Entrer votre age svp");
 * if ($userAge >= 12) echo "Cadet";
 * else if ($userAge >10) echo "Minime";
 * else if ($userAge >8) echo "Pupille";
 * else if ($userAge >6) echo "Poussin";
 * else echo "Aucune catégorie"; 
 */