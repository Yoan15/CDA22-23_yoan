<?php
$elm = new Ville($_POST);
var_dump($elm,$_POST);

switch ($_GET['mode']) {
	case "ajouter": {
		$elm = VillesManager::AddVille($elm);
		break;
	}
	case "modifier": {
		$elm = VillesManager::UpdateVille($elm, $elm->getIdVille());
		break;
	}
	case "supprimer": {
		$elm = VillesManager::DeleteVille($elm->getIdVille());
		break;
	}
}

//header("location:index.php?page=listeVilles");