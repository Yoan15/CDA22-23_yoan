<?php

class RepresentantsManager 
{

	public static function add(Representants $obj)
	{
 		return DAO::add($obj);
	}

	public static function update(Representants $obj)
	{
 		return DAO::update($obj);
	}

	public static function delete(Representants $obj)
	{
 		return DAO::delete($obj);
	}

	public static function findById($id)
	{
 		return DAO::select(Representants::getAttributes(),"Representants",["IdRepres" => $id])[0];
	}

	public static function getList(array $nomColonnes=null,  array $conditions = null, string $orderBy = null, string $limit = null, bool $api = false, bool $debug = false)
	{
 		$nomColonnes = ($nomColonnes==null)?Representants::getAttributes():$nomColonnes;
		return DAO::select($nomColonnes,"Representants",   $conditions ,  $orderBy,  $limit ,  $api,  $debug );	}
}