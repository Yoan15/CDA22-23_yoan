<?php

// V 0.5

// $elm = new Ville($_POST);

// switch ($_POST['mode']) {
//     case '0':
//         $elm = VillesManager::UpdateVille($elm, $elm->getIdVille());
//         break;
    
//     case 1:
//         $villeDepart = VillesManager::getList(['idVille'], ['idDepartement' => $elm->getIdDepartement(), 'idVille' => $elm->getIdVille()]);
//         //var_dump($villeDepart);
//         $idVille = $villeDepart[0]->getIdVille();
//         //var_dump($idVille);

//         $elm->setIdVille($idVille);
//         $elm = VillesManager::UpdateVille($elm, $idVille);
//         break;
// }

$elm = new Ville($_POST);

switch ($_POST['mode']) {
    case '0':
        echo 'ajout';
        break;
    
    case '1':
        echo 'ajout';
        break;
}