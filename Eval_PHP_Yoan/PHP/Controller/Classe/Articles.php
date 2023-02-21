<?php

class Articles
{

    private $_idArticle;
    private $_refArticle;
    private $_libelleArticle;
    private $_prix;
    private static $_attribut = ["idArticle", "refArticle", "libelleArticle", "prix"];

    /**
     * Get the value of _idArticle
     */ 
    public function getIdArticle()
    {
        return $this->_idArticle;
    }

    /**
     * Set the value of _idArticle
     *
     */ 
    public function setIdArticle($_idArticle)
    {
        $this->_idArticle = (int) $_idArticle;

        return $this;
    }

    /**
     * Get the value of _refArticle
     */ 
    public function getRefArticle()
    {
        return $this->_refArticle;
    }

    /**
     * Set the value of _refArticle
     *
     */ 
    public function setRefArticle($_refArticle)
    {
        $this->_refArticle = $_refArticle;

        return $this;
    }

    /**
     * Get the value of _libelleArticle
     */ 
    public function getLibelleArticle()
    {
        return $this->_libelleArticle;
    }

    /**
     * Set the value of _libelleArticle
     *
     */ 
    public function setLibelleArticle(string $_libelleArticle)
    {
        $this->_libelleArticle = $_libelleArticle;

        return $this;
    }

    /**
     * Get the value of _prix
     */ 
    public function getPrix()
    {
        return $this->_prix;
    }

    /**
     * Set the value of _prix
     *
     */ 
    public function setPrix($_prix)
    {
        $this->_prix = $_prix;

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
        return "[idArticle]: ". $this->_idArticle . "[refArticle]: ". $this->_refArticle . "[libelleArticle]: " . $this->_libelleArticle . "[prix]: " . $this->_prix;
    }
}