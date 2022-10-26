<?php

function chargerClasse($classe)
{
require $classe. '.class.php';
}
spl_autoload_register('ChargerClasse');

$sphere = new Spheres(["diametre"=>8]);
echo $sphere. "\n";
echo $sphere->perimetre()."\n";
echo $sphere->volume()."\n";
echo $sphere->afficherSphere()."\n";

$sphere2 = new Spheres(["diametre"=>16]);
echo $sphere2. "\n";
echo $sphere2->perimetre()."\n";
echo $sphere2->volume()."\n";
echo $sphere2->afficherSphere()."\n";