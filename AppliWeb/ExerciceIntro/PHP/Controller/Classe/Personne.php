<?php

class Personne
{
    private $_id;
    private $_nom;
    private $_prenom;
    private $_idVille;

    private static $_attribut = ["id", "nom", "prenom", "idVille"];

    public function getId()
    {
        return $this->_id;
    }

    public function setId($id)
    {
        $this->_id = (int) $id;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom(string $nom)
    {
        $this->_nom = $nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom(string $prenom)
    {
        $this->_prenom = $prenom;
    }

    public function getIdVille()
    {
        return $this->_idVille;
    }

    public function setIdVille(?int $idVille)
    {
        $this->_idVille = $idVille;
    }

    public static function getAttributes()
    {
        return self::$_attribut;
    }

    public function __construct(array $options = [])
    {
        if (!empty($options)) // empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }
    }

    public function hydrate($data)
    {
        foreach ($data as $key => $value)
        {
            $methode = "set" . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
            if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
            {
                $this->$methode($value);
            }
        }
    }

    public function __toString()
    {
        return "[id]: ". $this->_id . "[nom]: ". $this->_nom . "[prenom]: ". $this->_prenom . "[idVille]: ". $this->_idVille;
    }
}