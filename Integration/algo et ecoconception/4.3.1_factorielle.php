<?php

function Factorielle($n)
{
    if ($n == 1) {
        return 1;
        echo "1";
    }

    return Factorielle($n -1) * $n;
    echo $n . " x";
}

$n = readline("chiffre : ");
echo Factorielle($n);