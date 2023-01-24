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
}