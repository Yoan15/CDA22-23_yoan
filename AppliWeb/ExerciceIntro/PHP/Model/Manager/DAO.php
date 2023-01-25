<?php

class DAO
{
    public static function GetAll($table)
    {
        $stmt = DBConnect::getDb()->prepare("SELECT * FROM " . $table);
        $stmt->execute();
        $liste = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($liste as $value) {
            $res[] = new $table($value);
        }
        return $res;
    }

    /**
     * Permet de récupérer une personne par son ID
     */
    public static function GetById($table, $id)
    {
        $stmt = DBConnect::getDb()->prepare("SELECT * FROM " . $table . " WHERE id=?");
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
        return new $table($stmt->fetch(PDO::FETCH_ASSOC));
    }

    /**
     * Fonction qui permet d'ajouter une personne
     *
     * 
     */
    public static function Add($table, $nom, $prenom)
    {
        $stmt = DBConnect::getDb()->prepare("INSERT INTO " . $table ." (nom, prenom) VALUES (?,?)");
        $stmt->bindParam(1, $nom, PDO::PARAM_STR);
        $stmt->bindParam(2, $prenom, PDO::PARAM_STR);
        $stmt->execute();
    }

    /**
     * Fonction qui permet de supprimer une personne de la BDD
     */
    public static function Delete($table, $id)
    {
        $stmt = DBConnect::getDb()->prepare("DELETE FROM " . $table . " WHERE id=?");
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    /**
     * Fontion qui permet de modifier une personne en BDD
     */
    public static function UpdatePersonne($nom, $prenom, $id)
    {
        $stmt = DBConnect::getDb()->prepare("UPDATE personne SET `nom`=:nom, `prenom`=:prenom WHERE `id`=:id");
        $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
        $stmt->bindParam(':prenom', $prenom, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }
}