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

function crypte($mdp)
{
    return md5(md5($mdp));
}

function decode($texte)
{
    return $texte;
}

$regex = [
	"alpha" => "[A-Za-z]{2,}-?[A-Za-z]{2,}",
	"alphaNum" => "[A-Za-z0-9]*",
	"alphaMaj" => "[A-Z]*",
	"alphaMin" => "[a-z]*",
	"num" => "[0-9]*",
	"ucFirst" => "[A-Z][a-z]+",
	"email" => "[A-Za-z]([\.\-_]?[A-Za-z0-9])+@[A-Za-z]([\.\-_]?[A-Za-z0-9])+\.[A-Za-z]{2,4}",
	"date" => "[0-3]?[0-9](\/|-)(0|1)?[0-9](\/|-)[0-9]{4}",
	"pwd" => "(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}",
	"tel" => "0[0-9]([-/. ]?[0-9]{2}){4}",
	"postal" => "[0-9]{5}",
	"*"  => ".*"
];

function appelGet($obj, $chaine)
{
    $methode = "get" . ucfirst($chaine);
    return call_user_func(array($obj, $methode));
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
 * @return void 
 */
function combobox(?int $valeur, string $table, array $nomColonnes, array $conditions = null , ?string $attributs = "", string $orderby = null)
{
    //on initialise une variable selected à une valeur vide
    $selected = "";
    //Crée un tableau de colonnes vides
    $colonnes = [];
    //on récupère le premier attribut de la classe que l'on stocke dans une variable
    $id = $table::getAttributes()[0];
    //on insère dans le tableau $colonnes le nom des colonnes de la table pour en faire une copie
    $colonnes = $nomColonnes;
    //On met l'id dans le tableau $colonnes
    $colonnes[] = $id;
    //On appelle la fonction getList du manager de la table et on la stocke dans la variable $data
    $data = ($table.'sManager')::getList($colonnes, $conditions, $orderby, null, false, false);

    //on stocke le <select> dans une variable qui sera contruite plus tard
    $select = '<select id="'. $id .'" name="'. $id .'" '. $attributs .'>';
    //si la valeur est égale à null alors on ajoute l'attribut "selected" à l'option
    if ($valeur == null) 
    {
        $selected = " selected ";
    }
    $select .= '<option value="" '.$selected.'>Choisir une valeur...</option>';
    //pour chaque donnée en tant que valeur, on regarde si la valeur fournie est égale à l'id et si cela est le cas alors on met l'attribut selected à l'option correspondante
    foreach ($data as $value) 
    {
        $selected = (appelGet($value, $id) == $valeur)?" selected ":"";
        $contenu = "";
        foreach ($nomColonnes as $col) 
        {
            $contenu .= appelGet($value, $col) . " ";
        }
        $select .= '<option value="'. appelGet($value, $id).'" '. $selected .'>'. $contenu .'</option>';
    }
    //on concatène la balise fermante du <select> dans la variable créée précédement
    $select .= '</select>';
    return $select;
}

function afficherPage($page)
{
    $chemin = $page[0];
    $nom = $page[1];
    $titre = $page[2];
    $roleRequis = $page[3];
    $api = $page[4];

    
    // if (isset($_SESSION['utilisateur'])) {
    //     echo nav();
    // }
    $roleUtilisateur = (isset($_SESSION['utilisateur'])) ? $_SESSION['utilisateur']->getRole() : 0 ;
    if ($roleUtilisateur >= $roleRequis) {
        echo startHtml($nom, $titre);
        echo headerHtml();
        include $chemin . $nom . '.php';
        echo footer();
    }
    else
    {
        $titre = "Accès non autorisé";
        echo startHtml($nom, $titre);
        echo headerHtml();
        include "PHP/View/Form/formInscription.php";
        include "PHP/View/Form/formConnexion.php";
        echo footer();
    }
    
}