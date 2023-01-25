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
     */
    public static function Add($obj)
    {
        
        //On stocke le nom de la classe pour la réutiliser dans la requête SQL pour cela on utilise la methode get_class()
        $class = get_class($obj);
        $listeColonnes = "";
        $listeVariablesSql = "";
        //On fait un for pour récupérer les noms des attributs, on commence à 1 car on ne prend pas l'Id
        for ($i=1; $i < count($obj->getAttributes()); $i++) { 
            $listeColonnes .= $obj->getAttributes()[$i] . ", ";
            //On concatène ":" avec le nom des attributs 
            $listeVariablesSql .= ":" . $obj->getAttributes()[$i] . ", ";
        }
        //On récupère les attributs de la classe stockée par la variable $listeColonnes 
        //et on utilise un substr sur celle-ci pour enlever les caractères non désirés de fin.
        $stmt = DBConnect::getDb()->prepare("INSERT INTO " . $class ." (" . substr($listeColonnes, 0, -2) . ") VALUES (" . substr($listeVariablesSql, 0, -2) . ")");
        for ($i=1; $i < count($obj->getAttributes()); $i++) { 
            //On met dans la variable $get la concaténation du mot "get" avec le nom de l'attribut en mettant la première lettre de l'attribut en majuscule.
            //Résultat de l'exemple : getNom
            $get = "get" . ucfirst($obj->getAttributes()[$i]);
            $get = $obj->$get();
            $stmt->bindValue(":" . $obj->getAttributes()[$i], $get);
        }
        return $stmt->execute();
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
    public static function Update($table, $nom, $prenom, $id)
    {
        $stmt = DBConnect::getDb()->prepare("UPDATE " . $table . " SET `nom`=:nom, `prenom`=:prenom WHERE `id`=:id");
        $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
        $stmt->bindParam(':prenom', $prenom, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }
}