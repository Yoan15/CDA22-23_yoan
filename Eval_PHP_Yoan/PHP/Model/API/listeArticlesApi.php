<?php

$listeArticles = ArticlesManager::getList();
echo json_encode($listeArticles);