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
            self::$db = new PDO("mysql:host=" . Parametres::get_host() . ";dbname=" . Parametres::get_dbname() . ";port=" . Parametres::get_port(), Parametres::get_user(), Parametres::get_password());
        } catch (PDOException $e) {
            die("Erreur !: " . $e ->getMessage());
        }
    }
}
