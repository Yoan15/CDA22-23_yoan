<?php

class Departement
{
    private $_idDepartement;
    private $_nomDepartement;

    private static $_attribut = ["idDepartement", "nomDepartement"];

    public function getIdDepartement()
    {
        return $this->_idDepartement;
    }

    public function setIdDepartement($idDepartement)
    {
        $this->_idDepartement = (int) $idDepartement;
    }

    public function getNomDepartement()
    {
        return $this->_nomDepartement;
    }

    public function setNomDepartement(string $nomDepartement)
    {
        $this->_nomDepartement = $nomDepartement;
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
        return "[idDepartement]: ". $this->_idDepartement . "[nomDepartement]: ". $this->_nomDepartement;
    }
}