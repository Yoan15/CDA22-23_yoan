<?php
$liste = ClientsManager::getList(['IdClient','VilleClient'],null,null,null,true,false);
var_dump($liste);
echo json_encode($liste);