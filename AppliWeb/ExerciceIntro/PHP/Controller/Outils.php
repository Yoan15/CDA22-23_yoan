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
 * Fonction qui permet de générer des combobox
 * 
 * @param int $valeur => id de l'élément à sélectionner ou null 
 * 
 * @param string $table => contient Nom de la table sur laquelle la requête sera effectuée.
 * Exemple : nomTable => "FROM nomTable"
 * 
 * @param array $nomColonnes => contient le noms des champs désirés dans la requête.
 * Exemple :  [nomColonne1,nomColonne2] => "SELECT nomColonne1, nomColonne2"
 * 
 * @param array|null $conditions => null par défaut, attendu un tableau associatif 
 *  qui peut prendre plusieurs formes en fonction de la complexité des conditions.
 *  Exemples : tableau associatif
 *  [nomColonne => '1'] => "WHERE nomColonne = 1"
 *  [nomColonne => ['1','3']] => "WHERE nomColonne in (1,3)"
 *  [nomColonne => '%abcd%'] => "WHERE nomColonne like "abcd" "
 *  [nomColonne => '1->5'] => "WHERE nomColonne BETWEEN 1 and 5 "
 *  Si il y a plusieurs conditions alors :
 *  [nomColonne1 => '1', nomColonne2 => '%abcd%' ] => "WHERE nomColonne1 = 1 AND nomColonne2 LIKE "%abcd%"
 * 	[fullTexte]=>'test'=> "WHERE nomColonne1 like "%test%" OR nomColonne2 LIKE "%test%"
 * 
 * @param string $attributs => attributs attendus dans la balise <select>
 * 
 * @param string|null $orderBy => null par défaut, contient un string qui contient les noms de colonnes et le type de tri
 * Exemple :"nomColonne1 , nomColonne2 DESC" => "Order By nomColonne1 , nomColonne2 DESC"
 * 
 * @return string 
 */
function combobox(?int $valeur, string $table, array $nomColonnes = null, array $conditions = null , ?string $attributs = "", string $orderby = null)
{
    //Crée un tableau de colonnes vides
    $colonnes = [];
    //on récupère les attributs de la classe
    $attributs = $table::getAttributes();
    //var_dump($attributs);
    //on insère dans le tableau $colonnes le nom des colonnes de la table pour en faire une copie
    $colonnes = $nomColonnes;
    //var_dump($colonnes);
    //On met l'id dans le tableau $colonnes
    $colonnes[] = $attributs[0];
    //var_dump($colonnes);
    //On appelle la fonction getList du manager de la table et on la stocke dans la variable $data
    $data = ($table.'sManager')::getList($colonnes, $conditions, $orderby, null, false, true);
    var_dump($conditions);
    
    //on stocke le <select> dans une variable qui sera contruite plus tard
    $select = '<select name="" id="">';
        $select .= '<option value=""></option>';
        $select .= '<option value=""></option>';
    //on concatène la balise fermante du <select> dans la variable créée précédement
    $select .= '</select>';
}