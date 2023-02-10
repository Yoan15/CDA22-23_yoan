<?php
$elm = new Departement($_POST);

switch ($_GET['mode']) {
	case "ajouter": {
		$elm = DepartementsManager::AddDepartement($elm);
		break;
	}
	case "modifier": {
		$elm = DepartementsManager::UpdateDepartement($elm, $elm->getIdDepartement());
		break;
	}
	case "supprimer": {
		$elm = DepartementsManager::DeleteDepartement($elm);
		break;
	}
}

header("location:index.php?page=listeDepartement");