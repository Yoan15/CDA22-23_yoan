<?php
require "./PHP/Model/Manager/DBConnect.php";
include "./PHP/Model/Manager/connection.php";

echo "C'est l'index à utiliser.";

DBConnect::Connect($user);