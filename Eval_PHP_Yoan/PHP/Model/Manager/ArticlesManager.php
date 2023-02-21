<?php

class ArticlesManager
{
    /**
     * Fonction qui permet de faire un select qui peut posséder des conditions 
     */
    public static function getList(array $nomColonnes=null, array $conditions = null, string $orderBy = null, string $limit = null, bool $api = false, bool $debug = false)
	{
		$nomColonnes = ($nomColonnes==null)?Articles::getAttributes():$nomColonnes;
		return DAO::select($nomColonnes, "articles", $conditions, $orderBy, $limit, $api, $debug);
	}

    /**
     * Permet de récupérer un élément par son ID
     */
    public static function GetArticleById($id)
    {
        return DAO::select(Articles::getAttributes(), "Articles", ["idArticle" => $id])[0];
    }

    /**
     * Fonction qui permet d'ajouter un Article
     */
    public static function AddArticle($article)
    {
        $article = DAO::Add($article);
        return $article;
    }

    /**
     * Fontion qui permet de modifier un article en BDD
     */
    public static function UpdateArticle($article, $id)
    {
        return DAO::Update($article, $id);
    }
}