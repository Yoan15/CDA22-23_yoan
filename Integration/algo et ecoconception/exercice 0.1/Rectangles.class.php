<?php

class Rectangles
{
    private $longueur;
    private $largeur;

    

    public function getLongueur()
    {
        return $this->longueur;
    }

    public function setLongueur($longueur)
    {
        $this->longueur = $longueur;
    }

    public function getLargeur()
    {
        return $this->largeur;
    }

    public function setLargeur($largeur)
    {
        $this->largeur = $largeur;
    }

    public function __construct($longeur, $largeur)
    {
        $this->setLongueur($longeur);
        $this->setLargeur($largeur);
    }

    public function perimetre()
    {
        return ($this->getLongueur() + $this->getLargeur())*2;
    }

    public function aire()
    {
        return $this->getLongueur() * $this->getLargeur();
    }

    public function estCarre()
    {
        if ($this->getLongueur() === $this->getLargeur()) {
            return "Il s'agit d'un carré.";
        }
        return "Il ne s'agit pas d'un carré.";
    }

    public function afficherRectangle()
    {
        return "Longueur : [". $this->getLongueur() ."] - Largeur : [". $this->getLargeur() . "] - Périmètre : [".$this->perimetre()."] - Aire : [". $this->aire() ."] - ". $this->estCarre();
    }
}
