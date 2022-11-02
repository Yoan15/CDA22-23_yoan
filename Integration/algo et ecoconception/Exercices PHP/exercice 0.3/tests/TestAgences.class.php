<?php

class TestAgences
{


    /************Attributs************/

    private $_nom;
    private $_adresse;
    private $_codePostal;
    private $_ville;
    private $_restauration;

    /************Accesseurs************/

    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function getAdresse()
    {
        return $this->_adresse;
    }

    public function setAdresse($adresse)
    {
        $this->_adresse = $adresse;
    }

    public function getCodePostal()
    {
        return $this->_codePostal;
    }

    public function setCodePostal($codePostal)
    {
        $this->_codePostal = $codePostal;
    }

    public function getVille()
    {
        return $this->_ville;
    }

    public function setVille($ville)
    {
        $this->_ville = $ville;
    }

    public function getRestauration()
    {
        return $this->_restauration;
    }

    public function setRestauration($restauration)
    {
        $this->_restauration = $restauration;
    }

    /************Constructeur************/


    public function __construct(array $options = [])
    {
        if (!empty($options)) //empty : renvoi vrai si le tableau est vide
        {
            $this->hydrate($options);
        }
    }


    public function hydrate($data)
    {
        foreach ($data as $key => $value)
        {
            $methode = 'set' . ucfirst($key); //ucfirst met la 1ere lettre en majuscule
            if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
            {
                $this->$methode($value);
            }
        }
    }


    /************Autres Méthodes************/

    public function __toString()
    {
        return "Nom :[" . $this->getNom() . "]\n Adresse : [" . $this->getAdresse()."]\n Code postal : [" . $this->getCodePostal()."]\n Ville : [" . $this->getVille(). "]\n Restauration : [" . $this->getRestauration()."]";
    }

    public function equalsTo()
    {
        return true;
    }

    public static function cmpTo($obj1, $obj2)
    {
        return 0;
    }
}