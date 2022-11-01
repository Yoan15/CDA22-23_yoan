<?php

function chargerClasse($classe)
{
require $classe. '.class.php';
}
spl_autoload_register('ChargerClasse');

$prisme = new Prismes(["hauteur"=> 8, "base"=> 5, "profondeur"=> 3]);
echo $prisme."\n";
echo $prisme->perimetre()."\n";
echo $prisme->aire()."\n";
echo $prisme->afficherPrisme();

$prisme2 = new Prismes(["hauteur"=>15, "base"=>8, "profondeur"=> 3]);
echo $prisme2->perimetre()."\n";
echo $prisme2->aire()."\n";
echo $prisme2->afficherPrisme();