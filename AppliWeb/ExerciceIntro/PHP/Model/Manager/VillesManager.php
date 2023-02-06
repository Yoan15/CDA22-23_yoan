<?php

class VillesManager
{
    /**
     * Fonction qui permet de faire un select qui peut posséder des conditions 
     */
    public static function getList(array $nomColonnes=null, array $conditions = null, string $orderBy = null, string $limit = null, bool $api = false, bool $debug = false)
	{
		$nomColonnes = ($nomColonnes==null)?Ville::getAttributes():$nomColonnes;
		return DAO::select($nomColonnes, "Ville", $conditions, $orderBy, $limit, $api, $debug);
	}

    /**
     * Permet de récupérer une ville par son ID
     */
    public static function GetVilleById($id)
    {
        return DAO::select(Ville::getAttributes(), "Ville", ["idVille" => $id])[0];
    }

    /**
     * Fonction qui permet d'ajouter une ville
     */
    public static function AddVille($ville)
    {
        $ville = DAO::Add($ville);
        return $ville;
    }

    /**
     * Fonction qui permet de supprimer une ville de la BDD
     */
    public static function DeleteVille($obj)
    {
        return DAO::Delete($obj);
    }

    /**
     * Fontion qui permet de modifier une ville en BDD
     */
    public static function UpdateVille($ville, $id)
    {
        return DAO::Update($ville, $id);
    }
}