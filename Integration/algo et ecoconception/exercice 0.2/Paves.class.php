<?php

class Paves extends Rectangles
{
    private $hauteur;

    public function getHauteur()
    {
        return $this->hauteur;
    }

    public function setHauteur($hauteur)
    {
        $this->hauteur = $hauteur;
    }

    public function __construct(array $options=[])
    {
        if (!empty($options)) {
            $this->hydrate($options);
        }
    }

    public function hydrate($data)
    {
        foreach ($data as $key => $value) {
            $methode = "set". ucfirst($key);
            if (is_callable(([$this, $methode]))) {
                $this->$methode($value);
            }
        }
    }

    public function __toString()
    {
        return "Pavé - Longueur : ". $this->getLongueur() . ", Largeur : ". $this->getLargeur() . ", Hauteur : ". $this->getHauteur();
    }

    public function perimetre()
    {
        return ;
    }

    public function volume()
    {
        return $this->getLongueur()*$this->getLargeur()*$this->getHauteur();
    }

    public function afficherPave()
    {
        return ;
    }
}