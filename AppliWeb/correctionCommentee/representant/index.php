<?php

include "./PHP/CONTROLLER/Outils.php";

spl_autoload_register("ChargerClasse");

Parametres::init();

DbConnect::init();

session_start();

/******Les langues******/
/***On récupère la langue***/
if (isset($_GET['lang']) && TextesManager::checkIfLangExist($_GET['lang'])) {
	 // tester si la langue est gérée
	$_SESSION['lang'] = $_GET['lang'];
}else if (isset($_COOKIE['lang'])) {
	$_SESSION['lang'] = $_COOKIE['lang'];
}else{
	$_SESSION['lang'] = 'FR';
}
//Crée un cookie lang sur la machine de l'utilisateur d'une durée de 10h.
setcookie("lang", $_SESSION['lang'], time()+36000, '/');
/******Fin des langues******/

$routes=[
	"Default"=>["PHP/VIEW/FORM/","FormInscriptionConnexion","Connexion & Inscription",0,false],
	"Accueil"=>["PHP/VIEW/GENERAL/","Accueil","Accueil",0,false],

	"ActionConnexion"=>["PHP/CONTROLLER/ACTION/","ActionConnexion","Action de la connexion",0,false],
	"ActionInscription"=>["PHP/CONTROLLER/ACTION/","ActionInscription","Action de l'inscription",0,false],
	"ActionDeconnexion"=>["PHP/CONTROLLER/ACTION/","ActionDeconnexion","Action de deconnexion",0,false],

	"ListeMailAPI"=>["PHP/MODEL/API/","ListeMailAPI", "ListeMailAPI",0,true],
	"ListeAPI"=>["PHP/MODEL/API/","ListeAPI", "ListeAPI",0,true],
	"ListeClientsAPI"=>["PHP/MODEL/API/","ListeClientsAPI", "ListeClientsAPI",0,true],
	"ModifVenteAPI"=>["PHP/MODEL/API/","ModifVenteAPI", "ModifVenteAPI",0,true],
	
	"ListeClients"=>["PHP/VIEW/LISTE/","ListeClients","Liste Clients",0,false],
	"FormClients"=>["PHP/VIEW/FORM/","FormClients","Formulaire Clients",0,false],
	"ActionClients"=>["PHP/CONTROLLER/ACTION/","ActionClients","Action Clients",0,false],

	"ListeProduits"=>["PHP/VIEW/LISTE/","ListeProduits","Liste Produits",0,false],
	"ListeProduitsSansAjax"=>["PHP/VIEW/LISTE/","ListeProduitsSansAjax","Liste Produits",0,false],
	"FormProduits"=>["PHP/VIEW/FORM/","FormProduits","Formulaire Produits",0,false],
	"ActionProduits"=>["PHP/CONTROLLER/ACTION/","ActionProduits","Action Produits",0,false],

	"ListeRepresentants"=>["PHP/VIEW/LISTE/","ListeRepresentants","Liste Representants",0,false],
	"FormRepresentants"=>["PHP/VIEW/FORM/","FormRepresentants","Formulaire Representants",0,false],
	"ActionRepresentants"=>["PHP/CONTROLLER/ACTION/","ActionRepresentants","Action Representants",0,false],

	"ListeUtilisateurs"=>["PHP/VIEW/LISTE/","ListeUtilisateurs","Liste Utilisateurs",0,false],
	"FormUtilisateurs"=>["PHP/VIEW/FORM/","FormUtilisateurs","Formulaire Utilisateurs",0,false],
	"ActionUtilisateurs"=>["PHP/CONTROLLER/ACTION/","ActionUtilisateurs","Action Utilisateurs",0,false],

	"ListeVentes"=>["PHP/VIEW/LISTE/","ListeVentes","Liste Ventes",0,false],
	"FormVentes"=>["PHP/VIEW/FORM/","FormVentes","Formulaire Ventes",0,false],
	"ActionVentes"=>["PHP/CONTROLLER/ACTION/","ActionVentes","Action Ventes",0,false],

];

if(isset($_GET["page"]))
{

	$page=$_GET["page"];

	if(isset($routes[$page]))
	{
		AfficherPage($routes[$page]);
	}
	else
	{
		AfficherPage($routes["Default"]);
	}
}
else
{
	AfficherPage($routes["Default"]);
}