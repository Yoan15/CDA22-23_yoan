<?php

class Utilisateur
{
    ////////////////////////////////////
    // Attributs

    private $_id;
    private $_nom;
    private $_prenom;
    private $_email;
    private $_mdp;
    private $_role;

    private static $_attribut = ["idUtilisateur", "nom", "prenom", "email", "mdp", "role"];

    ////////////////////////////////////
    #region Accesseurs

    public function get_id()
    {
        return $this->_id;
    }

    public function set_id($_id)
    {
        $this->_id = (int) $_id;

        return $this;
    }

    public function get_nom()
    {
        return $this->_nom;
    }

    public function set_nom(string $_nom)
    {
        $this->_nom = $_nom;

        return $this;
    }

    public function get_prenom()
    {
        return $this->_prenom;
    }

    public function set_prenom(string $_prenom)
    {
        $this->_prenom = $_prenom;

        return $this;
    }

    public function get_email()
    {
        return $this->_email;
    }

    public function set_email($_email)
    {
        $this->_email = $_email;

        return $this;
    }

    public function get_mdp()
    {
        return $this->_mdp;
    }

    public function set_mdp($_mdp)
    {
        $this->_mdp = $_mdp;

        return $this;
    }

    public function get_role()
    {
        return $this->_role;
    }

    public function set_role($_role)
    {
        $this->_role = $_role;

        return $this;
    }

    public static function getAttributes()
    {
        return self::$_attribut;
    }

    #endregion Accesseurs
    ////////////////////////////////////
    // Constructeur

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
}