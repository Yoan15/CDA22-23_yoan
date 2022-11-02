<?php

class Livret extends Compte
{
    /************Attributs************/
    private $_numeroLivret;
    private $_montantLivret;


    /************Accesseurs************/

    public function getNumeroLivret()
    {
        return $this->_numeroLivret;
    }

    public function setNumeroLivret($numeroLivret)
    {
        $this->_numeroLivret = $numeroLivret;
    }

    public function getMontantLivret()
    {
        return $this->_montantLivret;
    }

    public function setMontantLivret($montantLivret)
    {
        $this->_montantLivret = $montantLivret;
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

    /**
     * @return int
     */
    public function appliqueInteret()
    {
        return $this->getMontantLivret() * 0.05;
    }
}