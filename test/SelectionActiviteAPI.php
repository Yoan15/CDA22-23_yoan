<?php

$elm = new ActivitesParTypes($_POST);

switch ($_POST['mode'])
{
    case 0:
        $elm = ActivitesParTypesManager::add($elm);
        break;
    case 1:
        $activite = ActivitesParTypesManager::getList(['idActivitesParTypes'], ['idTypePrestation' => $elm->getIdTypePrestation(), 'idActivite' => $elm->getIdActivite()]);
        $idActiviteParType = $apt[0]->getIdActivitesParTypes();

        $elm->setIdActivitesParTypes($idActiviteParType);
        $elm = ActivitesParTypesManager::delete($elm);
        break;
}