<?php

/**
 * Fonction qui charge les classes dont on a besoin
 * 
 */
function chargerClasse($classe)
{
    if (file_exists("PHP/Controller/Classe/". $classe . ".php")) 
    {
        require "PHP/Controller/Classe/". $classe . ".php";
    }
    if (file_exists("PHP/Model/Manager/". $classe . ".php")) 
    {
        require "PHP/Model/Manager/". $classe . ".php";
    }
}

function decode($texte)
{
    return $texte;
}

//permet de restreindre les caractères saisis par l'utilisateur dans les inputs
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

function afficherPage($page)
{
    $chemin = $page[0];
    $nom = $page[1];
    $titre = $page[2];
    $roleRequis = $page[3];
    $api = $page[4];

        if ($api) {
            include $chemin . $nom . '.php';
        } else {
            echo startHtml($nom, $titre);
            echo headerHtml();
            include $chemin . $nom . '.php';
            echo footer();
        }
}