<?php

class ClientsManager 
{

	public static function add(Clients $obj)
	{
 		return DAO::add($obj);
	}

	public static function update(Clients $obj)
	{
 		return DAO::update($obj);
	}

	public static function delete(Clients $obj)
	{
 		return DAO::delete($obj);
	}

	public static function findById($id)
	{
 		return DAO::select(Clients::getAttributes(),"Clients",["IdClient" => $id])[0];
	}

	public static function getList(array $nomColonnes=null,  array $conditions = null, string $orderBy = null, string $limit = null, bool $api = false, bool $debug = false)
	{
 		$nomColonnes = ($nomColonnes==null)?Clients::getAttributes():$nomColonnes;
		return DAO::select($nomColonnes,"Clients",   $conditions ,  $orderBy,  $limit ,  $api,  $debug );	}
}