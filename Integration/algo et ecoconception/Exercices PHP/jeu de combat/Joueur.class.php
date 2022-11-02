<?php

class Joueur
{
    /************Attributs************/
    private $_pv;
    private $_nom;

    /************Accesseurs************/

    public function getPv()
    {
        return $this->_pv;
    }

    private function setPv($pv) //private car en lecture seule
    {
        $this->_pv = $pv;
    }

    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
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

    public function estVivant()
    {
        if ($this->getPv() > 0) 
        {
            return true;
        }
    }

    public function attaque()
    {
        
    }

    public function subitDegats()
    {
        
    }

    public function lanceLeDe()
    {
        return De::lanceLeDe(); //le héros lance le dé
    }

    public function bouclier()
    {
        
    }
}