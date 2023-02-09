<?php

$idVille = $_POST['idVille'];
$listePersonne = PersonnesManager::getList(null, ['idVille'=>$idVille], null, null, true, false);
echo json_encode($listePersonne);