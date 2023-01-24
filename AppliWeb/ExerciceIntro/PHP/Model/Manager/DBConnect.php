<?php

class DBConnect{

    static function Connect(string $user)
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=personne',$user); //$pass pour le mot de passe
            foreach($db->query("SELECT * from client") as $row)
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
