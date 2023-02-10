<?php

class DepartementsManager
{
    /**
     * Fonction qui permet de faire un select qui peut posséder des conditions 
     */
    public static function getList(array $nomColonnes=null, array $conditions = null, string $orderBy = null, string $limit = null, bool $api = false, bool $debug = false)
	{
		$nomColonnes = ($nomColonnes==null)?Departement::getAttributes():$nomColonnes;
		return DAO::select($nomColonnes, "Departement", $conditions, $orderBy, $limit, $api, $debug);
	}

    /**
     * Permet de récupérer une Departement par son ID
     */
    public static function GetDepartementById($id)
    {
        return DAO::select(Departement::getAttributes(), "Departement", ["idDepartement" => $id])[0];
    }

    /**
     * Fonction qui permet d'ajouter une Departement
     */
    public static function AddDepartement($departement)
    {
        $departement = DAO::Add($departement);
        return $departement;
    }

    /**
     * Fonction qui permet de supprimer une ville de la BDD
     */
    public static function DeleteDepartement($obj)
    {
        return DAO::Delete($obj);
    }

    /**
     * Fontion qui permet de modifier une Departement en BDD
     */
    public static function UpdateDepartement($departement, $id)
    {
        return DAO::Update($departement, $id);
    }
}