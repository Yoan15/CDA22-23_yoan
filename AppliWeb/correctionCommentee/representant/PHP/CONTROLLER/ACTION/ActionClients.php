<?php
$elm = new Clients($_POST);

switch ($_GET['mode']) {
	case "Ajouter": {
		$elm = ClientsManager::add($elm);
		break;
	}
	case "Modifier": {
		$elm = ClientsManager::update($elm);
		break;
	}
	case "Supprimer": {
		$elm = ClientsManager::delete($elm);
		break;
	}
}

header("location:index.php?page=ListeClients");