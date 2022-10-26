<?php

class Triangles
{
    private $hauteur;
    private $base;

    //getters & setters
    

    public function getHauteur()
    {
        return $this->hauteur;
    }

    public function setHauteur($hauteur)
    {
        $this->hauteur = $hauteur;
    }

    public function getBase()
    {
        return $this->base;
    }

    public function setBase($base)
    {
        $this->base = $base;
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
        return "Triangle - Hauteur : ". $this->getHauteur() . ", Base : ". $this->getBase();
    }

    public function perimetre()
    {
        $hy = sqrt(pow($this->getHauteur(), 2) + pow($this->getBase(), 2));
        return $this->getHauteur() + $this->getBase() + $hy;
    }

    public function aire()
    {
        return ($this->getHauteur() * $this->getBase())/2;
    }

    public function afficherTriangle()
    {
        return "Base : [". $this->getBase() ."] - Hauteur : [". $this->getHauteur() ."] - Périmètre [". $this->perimetre() ."] - Aire [". $this->aire() ."]";
    }
}
