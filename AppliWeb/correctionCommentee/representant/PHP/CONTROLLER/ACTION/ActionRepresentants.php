<?php
$elm = new Representants($_POST);

switch ($_GET['mode']) {
	case "Ajouter": {
		$elm = RepresentantsManager::add($elm);
		break;
	}
	case "Modifier": {
		$elm = RepresentantsManager::update($elm);
		break;
	}
	case "Supprimer": {
		$elm = RepresentantsManager::delete($elm);
		break;
	}
}

header("location:index.php?page=ListeRepresentants");