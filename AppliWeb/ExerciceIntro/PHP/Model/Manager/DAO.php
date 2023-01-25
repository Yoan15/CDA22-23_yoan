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
    public static function Update($obj, $id)
    {
        $class = get_class($obj);
        $listeColonnes = "";
        for ($i=1; $i < count($obj->getAttributes()); $i++) { 
            $listeColonnes .= $obj->getAttributes()[$i] . " = :" . $obj->getAttributes()[$i] . ", ";
            //On concatène ":" avec le nom des attributs 
        }
        //$stmt = DBConnect::getDb()->prepare("UPDATE " . $class . " SET `nom`=:nom, `prenom`=:prenom WHERE `id`=:id");
        var_dump("UPDATE " . $class . " SET ". substr($listeColonnes, 0, -2) . " WHERE `id`=".$id);
        $stmt = DBConnect::getDb()->prepare("UPDATE " . $class . " SET ". substr($listeColonnes, 0, -2) . " WHERE `id`=".$id);
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
	 *
	 * @param array $nomColonnes => contient le noms des champs désirés dans la requête.
	 * Exemple :  [nomColonne1,nomColonne2] => "SELECT nomColonne1, nomColonne2"
	 *
	 * @param string $table => contient Nom de la table sur laquelle la requête sera effectuée.
	 * Exemple : nomTable => "FROM nomTable"
	 *
	 * @param array $conditions => null par défaut, attendu un tableau associatif 
	 * qui peut prendre plusieurs formes en fonction de la complexité des conditions.
	 *  Exemples : tableau associatif
	 *  [nomColonne => '1'] => "WHERE nomColonne = 1"
	 *  [nomColonne => ['1','3']] => "WHERE nomColonne in (1,3)"
	 *  [nomColonne => '%abcd%'] => "WHERE nomColonne like "abcd" "
	 *  [nomColonne => '1->5'] => "WHERE nomColonne BETWEEN 1 and 5 "
	 *  Si il y a plusieurs conditions alors :
	 *  [nomColonne1 => '1', nomColonne2 => '%abcd%' ] => "WHERE nomColonne1 = 1 AND nomColonne2 LIKE "%abcd%"
	 * 	[fullTexte]=>'test'=> "WHERE nomColonne1 like "%test%" OR nomColonne2 LIKE "%test%"
	 *
	 * @param string $orderBy => null par défaut, contient un string qui contient les noms de colonnes et le type de tri
	 * Exemple :"nomColonne1 , nomColonne2 DESC" => "Order By nomColonne1 , nomColonne2 DESC"
	 *
	 * @param string $limit  => null par défaut, contient un string pour donner la délimitations des enregistrements de la BDD
	 * Exemples :
	 * "1" => "LIMIT 1"
	 * "1,2"=> "LIMIT 1,2"
	 *
	 * @param boolean $api => false par défaut, mettre true si on souhaite recevoir la réponse sous forme de string sinon sous forme d'objets.
	 *
	 * @param bool $debug => contient faux par défaut mais s'il on le met a vrai, on affiche la requete qui est effectuée.
	 *
	 * @return [array ou object] $liste => résultat de la requête revoie false si la requête s'est mal passé sinon renvoie un tableau.
	 */
	public static function select(?array $nomColonnes=null, string $table, array $conditions = null, string $orderBy = null, string $limit = null, bool $api = false, bool $debug = false)
    {
        //pour le $debug
        if ($debug == true) {
            //afficher la requête
            //echo $request
        }
    }
}