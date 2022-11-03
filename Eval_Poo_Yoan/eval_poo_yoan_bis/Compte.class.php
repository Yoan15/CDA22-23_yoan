<?php

class Compte
{
    /************Attributs************/

    protected $_numero;
    protected $_montant;

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

    
    public function debiter()
    {
        return $this->getMontant() - 10;
        //var_dump($this->getMontant());
    }

    
    public function crediter()
    {
        return $this->getMontant() + 50;
        //var_dump($this->getMontant());
    }
}