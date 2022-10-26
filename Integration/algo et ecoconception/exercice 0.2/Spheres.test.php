<?php

function chargerClasse($classe)
{
require $classe. '.class.php';
}
spl_autoload_register('ChargerClasse');

