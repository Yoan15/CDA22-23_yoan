<?php

class DAO
{
    public static function GetAll($table)
    {
        $stmt = DBConnect::getDb()->prepare("SELECT * FROM " . $table);
        $stmt->execute();
        $liste = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($liste as $value)
        {
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
        for ($i=1; $i < count($obj->getAttributes()); $i++)
        { 
            $listeColonnes .= $obj->getAttributes()[$i] . ", ";
            //On concatène ":" avec le nom des attributs 
            $listeVariablesSql .= ":" . $obj->getAttributes()[$i] . ", ";
        }
        //On récupère les attributs de la classe stockée par la variable $listeColonnes 
        //et on utilise un substr sur celle-ci pour enlever les caractères non désirés de fin.
        $stmt = DBConnect::getDb()->prepare("INSERT INTO " . $class ." (" . substr($listeColonnes, 0, -2) . ") VALUES (" . substr($listeVariablesSql, 0, -2) . ")");
        for ($i=1; $i < count($obj->getAttributes()); $i++)
        { 
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
        for ($i=1; $i < count($obj->getAttributes()); $i++)
        { 
            $listeColonnes .= $obj->getAttributes()[$i] . " = :" . $obj->getAttributes()[$i] . ", ";
            //On concatène ":" avec le nom des attributs 
        }
        //$stmt = DBConnect::getDb()->prepare("UPDATE " . $class . " SET `nom`=:nom, `prenom`=:prenom WHERE `id`=:id");
        var_dump("UPDATE " . $class . " SET ". substr($listeColonnes, 0, -2) . " WHERE `id`=".$id);
        $stmt = DBConnect::getDb()->prepare("UPDATE " . $class . " SET ". substr($listeColonnes, 0, -2) . " WHERE `id`=".$id);
        for ($i=1; $i < count($obj->getAttributes()); $i++)
        { 
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
        $colsSlt="";
        $from= "";
        $orderBy ="";
        $limit="";

        $db = DbConnect::getDb();
        //On mets tous les paramètres à plat à l'aide json_encode
        $string = json_encode($nomColonnes) . $table . json_encode($conditions) . $orderBy . $limit . $debug;
        //Cherche si 1 des paramètres contient un ";" si oui, on stop pour éviter les injections SQL
        //IMPORTANT!!!
        if (strpos($string, ";"))
        {
            return false;
        }
        else if(!empty($nomColonnes) && ($table != null && $table != ""))
        {
            //Insère "Select", indiquant l'action de la requête
            $colsSlt = self::elementSelect($nomColonnes);

            //Insère "FROM" à la requête
            $from = " FROM " . $table;

            //Choix de conditions (en tableau assoc)
            if($conditions != null)
            {
                $conditions = self::conditionsSelect($conditions);
            }

            //Insère "ORDER BY" pour les tris + le type (ASC ou DESC)
            if($orderBy != null)
            {
            $orderBy = " ORDER BY ". $orderBy;
            }

            //Crée "LIMIT" + indication chiffré (de type string) pour délimitation (ex: "1" ou "3,2") /// OFFSET ?
            if($limit != null)
            {
                $limit = " LIMIT ". $limit;
            }
            
            //Constitution  de la requête
            $sql = $colsSlt . $from . $conditions . $orderBy . $limit;
            $stmtRequete = $db->prepare($sql); //ou Querry
            $stmtRequete->execute();
            
            //pour le $debug
            if ($debug == true)
            {
                //Affiche les infos concernant les variables constituant le requêtes
                var_dump($colsSlt . $from . $conditions . $orderBy . $limit);
            }

            $liste=[];

            //API
            while ($donnees = $stmtRequete->fetch(PDO::FETCH_ASSOC))
            { // on récupère les enregistrements de la BDD
                if ($donnees != false)
                {
                    if ($api)
                	{ // On vérifie si api est a true, on renvoie un string sinon des objets liés a à la table donnée en paramètres.
                        $liste[] = $donnees;
                    }
					else
                    {
                        $liste[] = new $table($donnees);
                    }
                }
            }
            return $liste;
        }
        return false;
            
    }

    /**
     * Permet de constituer la 1er partie de la requête "SELECT" et indiquant l'ensemble des colonnes sur lesquelles on s'appuie (cet ensemble est sous forme de tableau)
     * Pour éclater chaque element de l'ensemble sélectionné on l'entre dans la boucle, puis on concatène chaque élement afin de constituer la 1er partie de la requête.
     * @param array $ensembleSelect => l'ensemble de colonnes sélectionnés qui seront utiles pour manipuler la requête.  
     * @return string $slt => résultat donne une énumération de chaines de caractères séparées par une "," et enlève ","+espace en dernière position. 
     */
    private static function elementSelect($tab)
    {
        $slt = "SELECT ";
        foreach($tab as $colSelect)
        {
            $slt .= $colSelect . ", ";
        }
        return substr($slt, 0, strlen($slt)-2);
    }

    private static function ConditionsSelect($conditions)
    {
        $where = " WHERE ";
        foreach($conditions as $nomColonne => $value)
        {
            if(is_array($value))
            {
                //_SELECT prenom, nom, mail _FROM users 
                //_WHERE    _|prenom|     IN (|'Pierre', 'Victor'|) +
                $where .= $nomColonne . " IN (" .implode(",",$value) . ") AND ";
            } 
            else if (!(strpos($value, "%")===false))
            {
                //_WHERE    _|prenom|   | LIKE '|     %r% |'     +
                $where .= $nomColonne . ' LIKE "' . $value . '" AND ';
            } 
            else if (strpos($value, "->"))
            {//_WHERE    _|prenom|     BETWEEN       'F'       AND     'Joly'
                $tab = explode("->", $value);
                $where .= $nomColonne . " BETWEEN " . $tab[0] . " AND " . $tab[1] . " AND ";
            } 
            else 
            {
                //_WHERE    _|prenom| 
                $where .= $nomColonne . " = \"" . $value . "\" AND ";
            }
        }
        $where = substr($where, 0, strlen($where)-4);
        return $where;
    }
}