<?php

/**
 * Fonction qui permet de charger automatiquement les classes dont on a besoin
 *
 */
function chargerClasse($classe)
{
    if (file_exists("PHP/CONTROLLER/CLASSE/". $classe . ".php")) {
        require "PHP/CONTROLLER/CLASSE/" . $classe . ".php";
    }
    if (file_exists("PHP/MODEL/MANAGER/" . $classe . ".php")) {
        require "PHP/MODEL/MANAGER/" . $classe . ".php";
    }
}

function decode($texte)
{
    return $texte;
}

/**
 * 
 */
function combobox($nomColonnes, $table, $conditions, $orderBy, $limit, $api, $debug)
{
    $personnes = PersonnesManager::getList($nomColonnes, $table, $conditions, $orderBy, $limit, $api, $debug);
    var_dump($personnes);
    //$nomColonnesVille = ["idVille", "nomVille"];

    echo'<select name="id'.ucFirst($table).'" id="id'.ucFirst($table).'">';
    foreach ($personnes as $elt) {
        echo'<option value="'.$elt["nom"].'">'.$elt["nom"].'</option>';
    }
    echo'</select>';
    
}