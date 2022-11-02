<?php

class Compte
{
    /************Attributs************/

    private $_numero;
    private $_montant;

    /************Accesseurs************/

    public function getNumero()
    {
        return $this->_numero;
    }

    public function setNumero($numero)
    {
        $this->_numero = $numero;
    }

    public function getMontant()
    {
        return $this->_montant;
    }

    public function setMontant($montant)
    {
        $this->_montant = $montant;
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
    public function debiter()
    {
        
    }

    /**
     * @return int
     */
    public function crediter()
    {
        
    }
}