<?php

$elm = new Articles($_POST);

switch ($_GET['mode']) {
    case "ajouter":{
        $elm = ArticlesManager::AddArticle($elm);
        break;
    }
    case "modifier":{
        $elm = ArticlesManager::UpdateArticle($elm, $elm->getIdArticle());
        break;
    }
}

header("location:index.php?page=listeArticle");