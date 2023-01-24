<?php

class Parametres
{
    private static $_host;
    private static $_dbname;
    private static $_port;
    private static $_user;
    private static $_password;
    
    
    public static function get_host()
    {
        return self::$_host;
    }

    public static function get_dbname()
    {
        return self::$_dbname;
    }

    public static function get_port()
    {
        return self::$_port;
    }

    public static function get_user()
    {
        return self::$_user;
    }

    public static function get_password()
    {
        return self::$_password;
    }

    static function init()
    {
        $json = './config.json'; //on va chercher le fichier JSON
        $file = json_decode(file_get_contents($json)); //On transforme le JSON en objet
        //On fournit aux variables les valeurs de l'objet JSON
        self::$_host = decode($file->host);
        self::$_dbname = decode($file->dbname);
        self::$_port = $file->port;
        self::$_user = decode($file->user);
        self::$_password = decode($file->password);
    }
}