<?php
$elm = new Ventes($_POST);

switch ($_GET['mode']) {
	case "Ajouter": {
		$elm = VentesManager::add($elm);
		break;
	}
	case "Modifier": {
		$elm = VentesManager::update($elm);
		break;
	}
	case "Supprimer": {
		$elm = VentesManager::delete($elm);
		break;
	}
}

header("location:index.php?page=ListeVentes");