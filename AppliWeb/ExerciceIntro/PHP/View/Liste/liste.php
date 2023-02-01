<?php

function liste(array $colonnes, string $table, array $conditions = null, string $orderby = null)
{
    //$liste = '<body>';
    //On appelle la fonction getList du manager de la table et on la stocke dans la variable $data
    $data = ($table.'sManager')::getList($colonnes, $conditions, $orderby, null, false, true);
    var_dump($data);
    //$liste .= '</body>';
    //return $liste;
}