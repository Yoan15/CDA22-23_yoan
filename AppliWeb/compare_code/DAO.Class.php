<?php
class DAO
{
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
     *  [nomColonne => '%abcd%'] => "WHERE nomColonne like "%abcd%" "
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
    public static function select(?array $nomColonnes = null, string $table, array $conditions = null, string $orderBy = null, string $limit = null, bool $api = false, bool $debug = false)
    {
        // Initialisation des variables
        $sql = ""; // La requête SQL
        $listeColonnes = "*"; // Liste des colonnes voulues, par défaut on veut toutes les colonnes
        $listeConditions = ""; // Liste des conditions (WHERE)
        $ordre = ""; // ORDER BY
        $limite = ""; // LIMIT
        $liste = []; // Initialisation de la variable de retour

        // Traitement des noms de colonnes
        if ($nomColonnes != null) {
            $listeColonnes = ""; // Effacer l'étoile par défaut

            // Création de la chaîne contenant les noms de colonnes
            foreach ($nomColonnes as $colonne) {
                $listeColonnes .= $colonne . ", ";
            }

            // Retrait de la dernière virgule
            $listeColonnes = substr($listeColonnes, 0, -2);
        }

        // Si des conditions sont données
        if ($conditions != null) {

            // Début de la clause WHERE
            $listeConditions = " WHERE ";

            // Pour chaque conditions, vérification de ce qu'elles contiennent
            foreach ($conditions as $col => $value) {
                // Si Tableau, condition IN
                if (is_array($value)) {
                    $listeConditions .= $col . " IN (";

                    // Création de la liste
                    foreach ($value as $element) {
                        $listeConditions .= $element . ",";
                    }

                    // Retrait de la dernière virgule et fermeture de la liste
                    $listeConditions = substr($listeConditions, 0, -1) . ")";
                } else if (strpos($value, "%") !== false) { // Si value contient %, condition LIKE
                    // colonne LIKE 'value'
                    $listeConditions .=  $col . " LIKE '" . $value . "'";
                } else if (strpos($value, "->") !== false) { // Si value contient ->, condition BETWEEN
                    // Récupération des bornes
                    $bornes = explode("->", $value);

                    // colonne BETWEEN 'borne1' AND 'borne2'
                    $listeConditions .= $col . " BETWEEN '" . $bornes[0] . "' AND '" . $bornes[1] . "'";
                } else if ($col = "fullTexte") { // Si col est égal à fullTexte, recherche dans toutes les colonnes
                    // Récupération des noms de champs
                    $objet = new $table();
                    $attributs = $objet->getNomsColonnes();

                    // Création de la condition
                    $listeConditions .= "(";
                    foreach ($attributs as $attr) {
                        // nomColonne LIKE '%value%' OR ...
                        $listeConditions .= $attr . " LIKE '%" . $value . "%' OR ";
                    }

                    // Fin des conditions
                    $listeConditions = substr($listeConditions, 0, -4) . ")";

                    // Destruction de l'objet
                    unset($objet);
                } else { // Sinon condition d'égalité
                    // colonne = 'value'
                    $listeConditions .= $col . " = '" . $value . "'";
                }

                // AND pour la(les) condition(s) suivante(s)
                $listeConditions .= " AND ";
            }

            // Retrait du dernier " AND "
            $listeConditions = substr($listeConditions, 0, -5);
        }

        // ORDER BY
        if ($orderBy != null) {
            $ordre = " ORDER BY " . $orderBy;
        }

        // LIMIT
        if ($limit != null) {
            $limite = " LIMIT " . $limit;
        }

        // Construction de la requête
        $sql = "SELECT " . $listeColonnes . " FROM " . $table . $listeConditions . $ordre . $limite;

        // Vérification anti-injection SQL
        if (checkPointVirgule($sql)) {
            return false; // Sortie du programme pour éviter l'exécution de la requête
        }

        // Si debug voulu
        if ($debug) {
            var_dump($sql); // Affichage de la requête SQL créée
        }

        // Exécution de la requête
        $requete = DbConnect::getDb()->prepare($sql);
        $requete->execute();
        $tab = $requete->fetchAll(PDO::FETCH_ASSOC);

        // Création de la liste des enregistrements
        // Si pour API
        if ($api) {
            foreach ($tab as $element) {
                $liste[] = $element; // Retour liste de tableau
            }
        } else {
            foreach ($tab as $element) {
                $liste[] = new $table($element); // Retour liste d'objets
            }
        }

        // Retour
        return $liste;
    }

    /**
     * Fonction permettant d'ajouter un enregistrement dans une table
     *
     * @param object $objet L'objet contenant les attributs de l'enregistrement
     * @return bool
     */
    static function add($objet)
    {
        $listeColonnes = "";
        $listeValues = "";
        // Création des listes d'attributs
        for ($i = 1; $i < sizeof($objet->getNomsColonnes()); $i++) {
            $listeColonnes .= $objet->getNomsColonnes()[$i] . ", ";
            $listeValues .= ":" . $objet->getNomsColonnes()[$i] . ", ";
        }
        $requete = DbConnect::getDb()->prepare("
        INSERT INTO " . get_class($objet) . " (" . substr($listeColonnes, 0, -2) . ") VALUES(" . substr($listeValues, 0, -2) . ")
        ");
        // Binds
        for ($i = 1; $i < sizeof($objet->getNomsColonnes()); $i++) {
            // Récupération du nom du getter de l'attribut
            $get = "get" . ucfirst($objet->getNomsColonnes()[$i]);
            // Stockage du getter dans $get
            $get = $objet->$get();
            // Bind
            $requete->bindValue(":" . $objet->getNomsColonnes()[$i], $get);
        }
        return $requete->execute();
    }

    /**
     * Fonction permettant de modifier un enregistrement
     *
     * @param object $objet L'obet contenant les attributs modifiés de l'enregistrement
     * @return bool
     */
    static function update($objet)
    {
        $listeDonnees = "";
        // Création de la liste des attributs et des valeurs (attribut = :value)
        for ($i = 0; $i < sizeof($objet->getNomsColonnes()); $i++) {
            if ($i > 0) {
                $listeDonnees .= $objet->getNomsColonnes()[$i] . " = :" . $objet->getNomsColonnes()[$i] . ", ";
            } else {
                $id = $objet->getNomsColonnes()[$i] . " = :" . $objet->getNomsColonnes()[$i];
            }
        }
        $requete = DbConnect::getDb()->prepare("
        UPDATE " . get_class($objet) . " SET " . substr($listeDonnees, 0, -2) . " WHERE " . $id);
        // Binds
        for ($i = 0; $i < sizeof($objet->getNomsColonnes()); $i++) {
            // Récupération du nom du getter de l'attribut
            $get = "get" . ucfirst($objet->getNomsColonnes()[$i]);
            // Stockage du getter dans $get
            $get = $objet->$get();
            // Bind
            $requete->bindValue(":" . $objet->getNomsColonnes()[$i], $get);
        }
        return $requete->execute();
    }

    /**
     * Fonction permettant de supprimer un enregistrement
     *
     * @param object $objet L'objet contenant les attributs de l'enregistrement
     * @return bool
     */
    static function delete($objet)
    {
        $requete = DbConnect::getDb()->prepare("
        DELETE FROM " . get_class($objet) . " WHERE " . $objet->getNomsColonnes()[0] . " = :id
        ");
        $get = "get" . ucfirst($objet->getNomsColonnes()[0]);
        $get = $objet->$get();
        $requete->bindValue(":id", $get, PDO::PARAM_INT);
        return $requete->execute();
    }
}
