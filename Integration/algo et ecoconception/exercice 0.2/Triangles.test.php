<?php

function chargerClasse($classe)
{
    require $classe. ".class.php";
}
spl_autoload_register("ChargerClasse");

$triangle = new Triangles(["hauteur"=>8, "base"=>5]);
echo $triangle->perimetre()."\n";
echo $triangle->aire()."\n";
echo $triangle->afficherCercle();

$triangle2 = new Triangles(["hauteur"=>15, "base"=>8]);
echo $triangle2->perimetre()."\n";
echo $triangle2->aire()."\n";
echo $triangle2->afficherCercle();