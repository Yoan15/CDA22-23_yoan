<?php

$idDepartement = $_POST['idDepartement'];
$listeVilles = VillesManager::getList(null, ['idDepartement'=>$idDepartement], null, null, true, false);
echo json_encode($listeVilles);