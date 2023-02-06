<?php

//require "./PHP/Model/Manager/PersonnesDAO.php";

class PersonnesManager
{
    /**
     * Fonction qui permet de faire un select qui peut posséder des conditions 
     */
    public static function getList(array $nomColonnes=null, array $conditions = null, string $orderBy = null, string $limit = null, bool $api = false, bool $debug = false)
	{
		$nomColonnes = ($nomColonnes==null)?Personne::getAttributes():$nomColonnes;
		return DAO::select($nomColonnes, "personne", $conditions, $orderBy, $limit, $api, $debug);
	}

    /**
     * Permet de récupérer une personne par son ID
     */
    public static function GetPersonneById($id)
    {
        return DAO::select(Personne::getAttributes(), "Personne", ["id" => $id])[0];
    }

    /**
     * Fonction qui permet d'ajouter une personne
     */
    public static function AddPersonne($personne)
    {
        $personne = DAO::Add($personne);
        return $personne;
    }

    /**
     * Fonction qui permet de supprimer une personne de la BDD
     */
    public static function DeletePersonne($obj)
    {
        return DAO::Delete($obj);
    }

    /**
     * Fontion qui permet de modifier une personne en BDD
     */
    public static function UpdatePersonne($personne, $id)
    {
        return DAO::Update($personne, $id);
    }
}