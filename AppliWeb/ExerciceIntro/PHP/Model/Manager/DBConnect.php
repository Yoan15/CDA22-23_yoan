<?php

class DBConnect{

    static function Connect()
    {
        try {
            var_dump("mysql:host=".Parametres::get_host().";dbname=".Parametres::get_dbname().";user=".Parametres::get_user());
            $db = new PDO("mysql:host=".Parametres::get_host().";dbname=".Parametres::get_dbname().";user=".Parametres::get_user());
            foreach($db->query("SELECT * from personne.client") as $row)
            {
                print_r($row);
            }
            $db = null;
        } catch (PDOException $e) {
            print "Erreur !: " . $e ->getMessage() . "<br/>";
            die();
        }
    }
    
}
