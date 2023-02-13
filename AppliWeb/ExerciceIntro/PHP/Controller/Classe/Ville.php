<?php

class ville
{

    private $_idVille;
    private $_nomVille;
    private $_idDepartement;
    private static $_attribut = ["idville", "nomVille", "idDepartement"];

    public function getIdVille()
    {
        return $this->_idVille;
    }

    public function setIdVille($idVille)
    {
        $this->_idVille = $idVille;
    }

    public function getNomVille()
    {
        return $this->_nomVille;
    }

    public function setNomVille($nomVille)
    {
        $this->_nomVille = $nomVille;
    }

    public function getIdDepartement()
    {
        return $this->_idDepartement;
    }

    public function setIdDepartement(?int $_idDepartement)
    {
        $this->_idDepartement = $_idDepartement;

        return $this;
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
        return "[idVille]: ". $this->_idVille . "[nomVille]: ". $this->_nomVille . "[idDepartement]: " . $this->_idDepartement;
    }
}