<?php

$scoreC1 = readline("Veuillez saisir le score du candidat n°1 : ");
$scoreC2 = readline("Veuillez saisir le score du candidat n°2 : ");
$scoreC3 = readline("Veuillez saisir le score du candidat n°3 : ");
$scoreC4 = readline("Veuillez saisir le score du candidat n°4 : ");


if ($scoreC1 > 50) {
    echo "élu";
} elseif ($scoreC1 < 12.5) {
    echo "battu";
} elseif (($scoreC1 > $scoreC2 && $scoreC3 && $scoreC4)) {
    echo "ballottage favorable";
} else {
    echo "ballottage défavorable";
}