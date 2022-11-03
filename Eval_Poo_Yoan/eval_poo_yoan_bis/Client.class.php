<?php

class Client
{
    /************Attributs************/

    private $_nom;
    private $_prenom;
    private $_compte;
    private $_livret;

    /************Accesseurs************/

    public function getNom()
    {
        return $this->_nom;
    }

    public function setNom($nom)
    {
        $this->_nom = $nom;
    }

    public function getPrenom()
    {
        return $this->_prenom;
    }

    public function setPrenom($prenom)
    {
        $this->_prenom = $prenom;
    }

    public function getCompte()
    {
        return $this->_compte;
    }

    public function setCompte(Compte $compte)
    {
        $this->_compte = $compte;
    }

    public function getLivret()
    {
        return $this->_livret;
    }

    public function setLivret(Livret $livret)
    {
        $this->_livret = $livret;
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

    
    public function recevoir()
    {
        return $this->getCompte()->crediter();
        //var_dump($this->getCompte()->getMontant());
    }

    
    public function depenser()
    {
        return $this->getCompte()->debiter();
        //var_dump($this->getCompte()->getMontant());
    }

    
    public function epargner()
    {
        return $this->getCompte()->getMontant() - 100;
        //var_dump($this->getCompte()->getMontant());
    }


    public function affiche()
    {
        return "Le client ".$this->getNom()." ".$this->getPrenom()." a ".$this->getCompte()->getMontant()." euros sur son compte ".$this->getCompte()->getNumero()." et ".$this->getLivret()->getMontantLivret()." euros sur son livret ".$this->getLivret()->getNumeroLivret()."\n";
    }
}