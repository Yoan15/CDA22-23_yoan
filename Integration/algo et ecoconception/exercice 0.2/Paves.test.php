<?php

function chargerClasse($classe)
{
require $classe. '.class.php';
}
spl_autoload_register('ChargerClasse');

$pave = new Paves(["longueur"=> 10, "largeur"=> 5, "hauteur"=> 3]);
echo $pave."\n";