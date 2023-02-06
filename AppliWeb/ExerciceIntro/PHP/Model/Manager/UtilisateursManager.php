<?php

class UtilisateurManager 
{
    /**
     * permet de récupérer la liste des utilisateurs
     *
     */
    public static function getList(array $nomColonnes=null, array $conditions = null, string $orderBy = null, string $limit = null, bool $api = false, bool $debug = false)
    {
        $nomColonnes = ($nomColonnes==null)?Utilisateur::getAttributes():$nomColonnes;
		return DAO::select($nomColonnes, "utilisateur", $conditions, $orderBy, $limit, $api, $debug);
    }

    /**
     * Permet de récupérer un utilisateur par son ID
     */
    public static function GetUtilisateurById($id)
    {
        return DAO::select(Utilisateur::getAttributes(), "Utilisateur", ["id" => $id])[0];
    }

    /**
     * Fonction qui permet d'ajouter un utilisateur
     */
    public static function AddUtilisateur($utilisateur)
    {
        $utilisateur = DAO::Add($utilisateur);
        return $utilisateur;
    }

    /**
     * Fonction qui permet de supprimer un utilisateur de la BDD
     */
    public static function DeleteUtilisateur($obj)
    {
        return DAO::Delete($obj);
    }

    /**
     * Fontion qui permet de modifier un utilisateur en BDD
     */
    public static function UpdateUtilisateur($utilisateur, $id)
    {
        return DAO::Update($utilisateur, $id);
    }
}