<?php
require "./PHP/Model/Manager/DBConnect.php";
require "./PHP/Controller/Classe/Parametres.php";
include "./PHP/Model/Manager/connection.php";

echo "C'est l'index à utiliser.";
Parametres::parameters();
DBConnect::Connect();

//Parametres::parameters();