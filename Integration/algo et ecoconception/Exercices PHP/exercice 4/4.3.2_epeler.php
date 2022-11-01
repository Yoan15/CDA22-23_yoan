<?php

function Epeler($mot)
{
    echo $mot;
    $premiereLettre = substr($mot,1);
    echo $premiereLettre;
    $derniereLettre = substr($mot, -1);
    echo $derniereLettre;

}

$mot = readline("Veuillez saisir un mot à épeler : ");

echo Epeler($mot);

class Classe
{


    /************Attributs************/




    /************Accesseurs************/




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
                $this->$methode($value)
            }
        }
    }


    /************Autres Méthodes************/
}