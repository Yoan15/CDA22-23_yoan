<?php
$elm = new Ville($_POST);
// var_dump($elm,$_POST);

switch ($_GET['mode']) {
	case "ajouter": {
		$elm = VillesManager::AddVille($elm);
		//var_dump($elm);
		break;
	}
	case "modifier": {
		$elm = VillesManager::UpdateVille($elm, $elm->getIdVille());
		//var_dump($elm);
		break;
	}
	case "supprimer": {
		$elm = VillesManager::DeleteVille($elm);
		//var_dump($elm);
		break;
	}
}

header("location:index.php?page=listeVille");