<?php

function chargerClasse($classe)
{
require $classe. '.class.php';
}
spl_autoload_register('ChargerClasse');

$cercle = new Cercles(["diametre"=>8]);
echo $cercle->perimetre()."\n";
echo $cercle->aire()."\n";
echo $cercle->afficherCercle()."\n";