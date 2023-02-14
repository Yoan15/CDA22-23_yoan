<?php
//var_dump($_POST);
$vente=VentesManager::findById($_POST['idVente']);
//var_dump($vente);
$vente->setQuantite($_POST['qte']);
//var_dump($vente);
VentesManager::update($vente);
