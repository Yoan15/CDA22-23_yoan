<?php
require "./PHP/Controller/Outils.php";
spl_autoload_register('chargerClasse');

Parametres::init();
DBConnect::Connect();