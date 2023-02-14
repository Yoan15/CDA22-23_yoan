<?php

class Representants 
{

	/*****************Attributs***************** */

	private $_IdRepres;
	private $_NomRepres;
	private $_VilleRepres;
	private static $_attributes=["IdRepres","NomRepres","VilleRepres"];
	/***************** Accesseurs ***************** */


	public function getIdRepres()
	{
		return $this->_IdRepres;
	}

	public function setIdRepres(?int $IdRepres)
	{
		$this->_IdRepres=$IdRepres;
	}

	public function getNomRepres()
	{
		return $this->_NomRepres;
	}

	public function setNomRepres(?string $NomRepres)
	{
		$this->_NomRepres=$NomRepres;
	}

	public function getVilleRepres()
	{
		return $this->_VilleRepres;
	}

	public function setVilleRepres(?string $VilleRepres)
	{
		$this->_VilleRepres=$VilleRepres;
	}

	public static function getAttributes()
	{
		return self::$_attributes;
	}

	/*****************Constructeur***************** */

	public function __construct(array $options = [])
	{
 		if (!empty($options)) // empty : renvoi vrai si le tableau est vide
		{
			$this->hydrate($options);
		}
	}
	public function hydrate($data)
	{
 		foreach ($data as $key => $value)
		{
 			$methode = "set".ucfirst($key); //ucfirst met la 1ere lettre en majuscule
			if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
			{
				$this->$methode($value===""?null:$value);
			}
		}
	}

	/*****************Autres Méthodes***************** */

	/**
	* Transforme l'objet en chaine de caractères
	*
	* @return String
	*/
	public function toString()
	{
		return "IdRepres : ".$this->getIdRepres()."NomRepres : ".$this->getNomRepres()."VilleRepres : ".$this->getVilleRepres()."\n";
	}
}