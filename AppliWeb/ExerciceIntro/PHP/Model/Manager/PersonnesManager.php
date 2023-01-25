<?php

//require "./PHP/Model/Manager/PersonnesDAO.php";

class PersonnesManager
{
    /**
     * fonction qui récupère les personnes dans la BDD
     */
    public static function ListePersonnes()
    {
        // $stmt = DBConnect::getDb()->prepare("SELECT * FROM client");
        // $stmt->execute();
        // return $stmt->fetchAll(PDO::FETCH_ASSOC);
        $personnes = DAO::GetAll("Personne");
        return $personnes;
    }

    /**
     * Permet de récupérer une personne par son ID
     */
    public static function GetPersonneById($id)
    {
        //$stmt = DBConnect::getDb()->prepare("SELECT * FROM personne WHERE id=?");
        //$stmt->bindParam(1, $id, PDO::PARAM_INT);
        //$stmt->execute();
        //return $stmt->fetch(PDO::FETCH_ASSOC);
        $personne = DAO::GetById("Personne", $id);
        return $personne;
    }

    /**
     * Fonction qui permet d'ajouter une personne
     *
     * 
     */
    public static function AddPersonne($personne)
    {
        $personne = DAO::Add($personne);
        return $personne;
    }

    /**
     * Fonction qui permet de supprimer une personne de la BDD
     */
    public static function DeletePersonne($id)
    {
        return DAO::Delete("Personne", $id);
    }

    /**
     * Fontion qui permet de modifier une personne en BDD
     */
    public static function UpdatePersonne($personne, $id)
    {
        return DAO::Update($personne, $id);
    }
    
}