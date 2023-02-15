<?php

$elm = new Ville($_POST);
echo $elm;

switch ($_POST['mode']) {
    case '0':
        $elm = VillesManager::UpdateVille($elm, $elm->getIdVille());
        break;
    
    case '1':
        $elm->setIdDepartement(null);
        $elm = VillesManager::UpdateVille($elm, $elm->getIdVille());
        break;
}