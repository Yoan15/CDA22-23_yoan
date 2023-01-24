<?php

class PersonnesManager
{
    /**
     * fonction qui récupère les personnes
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
    public function AddPersonne()
    {

    }
}