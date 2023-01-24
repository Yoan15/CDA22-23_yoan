<?php

class Personne
{
    private $_id;
    private $_nom;
    private $_prenom;

    

    /**
     * Get the value of _id
     */
    public function get_id()
    {
        return $this->_id;
    }

    /**
     * Get the value of _nom
     */
    public function get_nom()
    {
        return $this->_nom;
    }

    /**
     * Set the value of _nom
     */
    public function set_nom($_nom): self
    {
        $this->_nom = $_nom;

        return $this;
    }

    /**
     * Get the value of _prenom
     */
    public function get_prenom()
    {
        return $this->_prenom;
    }

    /**
     * Set the value of _prenom
     */
    public function set_prenom($_prenom): self
    {
        $this->_prenom = $_prenom;

        return $this;
    }


}