<?php

class Prismes extends Triangles
{

    private $profondeur;

    public function getProfondeur()
    {
        return $this->profondeur;
    }

    public function setProfondeur($profondeur)
    {
        $this->profondeur = $profondeur;
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
        return "Prisme - Hauteur : ". $this->getHauteur() . ", Base : ". $this->getBase() . ", Profondeur : ". $this->getProfondeur();
    }

    public function perimetre()
    {
        return parent::perimetre()*2 + 3*$this->getProfondeur();
    }

    public function volume()
    {
        return parent::aire()*$this->getProfondeur();
    }

    public function afficherPrisme()
    {
        return "Périmètre : [". $this->perimetre() ."] - Volume : [". $this->volume() . "]";
    }
}
