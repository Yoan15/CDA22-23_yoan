<?php

function chargerClasse($classe)
{
require $classe. '.class.php';
}
spl_autoload_register('ChargerClasse');

$pave = new Paves(["longueur"=> 8, "largeur"=> 10, "hauteur"=> 5]);
echo $pave."\n";
echo $pave->perimetre()."\n";
echo $pave->volume()."\n";
echo $pave->afficherPave();