<?php

function liste(array $nomColonnes, string $table, array $conditions = null, string $orderby = null)
{
    $liste = "";
    $id = $table::getAttributes()[0];
    $colonnes = [];
    $colonnes = $nomColonnes;
    $colonnes[] = $id;
    //$liste = '<table>';
    //On appelle la fonction getList du manager de la table et on la stocke dans la variable $data
    $data = ($table.'sManager')::getList($nomColonnes, $conditions, $orderby, null, false, true);
    //var_dump($data);

    $liste .= '<main class="grid">';
    foreach ($nomColonnes as $col) {
        $liste .= '<article>'. $col .'</article>';
    }
    $liste .= '</main>';
    
    // foreach ($data as $value) {
    //     //var_dump($value);
    //     $liste .= '<article>'. $value .'</article>';
    // }
    //$liste .= '</table>';
    return $liste;
}