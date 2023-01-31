<?php

class VillesManager
{
    /**
     * fonction qui récupère les villes dans la BDD
     */
    public static function ListeVilles()
    {
        $villes = DAO::GetAll("Ville");
        return $villes;
    }

    /**
     * Permet de récupérer une ville par son ID
     */
    public static function GetVilleById($id)
    {
        $ville = DAO::GetById("Ville", $id);
        return $ville;
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
    public static function DeleteVille($id)
    {
        return DAO::Delete("Ville", $id);
    }

    /**
     * Fontion qui permet de modifier une ville en BDD
     */
    public static function UpdateVille($ville, $id)
    {
        return DAO::Update($ville, $id);
    }

    public static function getList(array $nomColonnes=null, array $conditions = null, string $orderBy = null, string $limit = null, bool $api = false, bool $debug = false)
	{
		$nomColonnes = ($nomColonnes==null)?Ville::getAttributes():$nomColonnes;
		var_dump($nomColonnes);
		return DAO::select($nomColonnes, "Ville", $conditions, $orderBy, $limit, $api, $debug);
	}
    
}