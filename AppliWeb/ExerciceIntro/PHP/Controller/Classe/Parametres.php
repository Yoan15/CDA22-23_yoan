<?php

class Parametres
{
    private static $_host;
    private static $_dbname;
    private static $_user;
    
    /**
     * Get the value of _host
     *
     * @return $_host
     */
    public static function get_host()
    {
        return self::$_host;
    }

    /**
     * Get the value of _dbname
     *
     * @return $_dbname
     */
    public static function get_dbname()
    {
        return self::$_dbname;
    }

    /**
     * Get the value of _user
     *
     * @return $_user
     */
    public static function get_user()
    {
        return self::$_user;
    }

    static function parameters()
    {
        $json = './config.json';
        $file = json_decode(file_get_contents($json));
        $_host = $file->host;
        $_dbname = $file->dbname;
        $_user = $file->user;
    }
}