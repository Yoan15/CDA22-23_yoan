<?php

class Spheres extends Cercles
{
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
        return "Sphere - Diamètre : ". $this->getDiametre();
    }

    public function perimetre()
    {
        return parent::perimetre();
    }

    public function volume()
    {
        return (4/3)*pi()*pow(parent::rayon(), 3);
    }

    public function afficherSphere()
    {
        return "Périmètre : [". $this->perimetre() ."] - Volume : [". $this->volume() . "]";
    }
}
