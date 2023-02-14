<?php

class VentesManager 
{

	public static function add(Ventes $obj)
	{
 		return DAO::add($obj);
	}

	public static function update(Ventes $obj)
	{
 		return DAO::update($obj);
	}

	public static function delete(Ventes $obj)
	{
 		return DAO::delete($obj);
	}

	public static function findById($id)
	{
 		return DAO::select(Ventes::getAttributes(),"Ventes",["IdVente" => $id])[0];
	}

	public static function getList(array $nomColonnes=null,  array $conditions = null, string $orderBy = null, string $limit = null, bool $api = false, bool $debug = false)
	{
 		$nomColonnes = ($nomColonnes==null)?Ventes::getAttributes():$nomColonnes;
		return DAO::select($nomColonnes,"Ventes",   $conditions ,  $orderBy,  $limit ,  $api,  $debug );	}
}