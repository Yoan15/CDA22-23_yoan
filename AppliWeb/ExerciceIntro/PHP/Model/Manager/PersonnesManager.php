<?php

class PersonnesManager
{
    /**
     * fonction qui récupère les personnes dans la BDD
     *
     * 
     */
    public static function GetAllPersonnes()
    {
        $stmt = DBConnect::getDb()->prepare("SELECT * FROM client");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Permet de récupérer une personne par son ID
     */
    public static function GetPersonneById($id)
    {
        $stmt = DBConnect::getDb()->prepare("SELECT * FROM client WHERE id=?");
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * Fonction qui permet d'ajouter une personne
     *
     * 
     */
    public static function AddPersonne($nom, $prenom)
    {
        $stmt = DBConnect::getDb()->prepare("INSERT INTO client (nom, prenom) VALUES (?,?)");
        $stmt->bindParam(1, $nom, PDO::PARAM_STR);
        $stmt->bindParam(2, $prenom, PDO::PARAM_STR);
        $stmt->execute();
    }

    /**
     * Fonction qui permet de supprimer une personne de la BDD
     */
    public static function DeletePersonne($id)
    {
        $stmt = DBConnect::getDb()->prepare("DELETE FROM client WHERE id=?");
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    /**
     * Fontion qui permet de modifier une personne en BDD
     */
    public static function UpdatePersonne($nom, $prenom, $id)
    {
        $stmt = DBConnect::getDb()->prepare("UPDATE client SET 'nom'=?, 'prenom'=? WHERE 'id'=?");
        $stmt->bindParam(1, $nom, PDO::PARAM_STR);
        $stmt->bindParam(2, $prenom, PDO::PARAM_STR);
        $stmt->bindParam(3, $id, PDO::PARAM_INT);
        $stmt->execute();
    }
    
}