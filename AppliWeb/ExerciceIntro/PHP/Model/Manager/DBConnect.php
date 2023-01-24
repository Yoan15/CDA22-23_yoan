<?php

class DBConnect
{
    private static $db;

    public static function getDb()
    {
        return self::$db;
    }

    static function Connect()
    {
        try {
            var_dump("mysql:host=".Parametres::get_host().";dbname=".Parametres::get_dbname().";port=".Parametres::get_port().",".Parametres::get_user().Parametres::get_password());
            self::$db = new PDO("mysql:host=" . Parametres::get_host() . ";dbname=" . Parametres::get_dbname() . ";port=" . Parametres::get_port(), Parametres::get_user(), Parametres::get_password());
            // foreach($db->query("SELECT * from personne.client") as $row)
            // {
            //     print_r($row);
            // }
            //$db = null;
        } catch (PDOException $e) {
            die("Erreur !: " . $e ->getMessage());
        }
    }
}
