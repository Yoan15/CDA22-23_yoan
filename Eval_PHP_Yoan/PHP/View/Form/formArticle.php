<?php

global $regex;

if (isset($_GET['id'])) {
    $elm = ArticlesManager::GetArticleById($_GET['id']);
} else {
    $elm = new Articles();
}

echo '<main class="column center">';
echo '<form class="GridForm action="index.php?page=actionArticles&mode='. $_GET['mode'] .'" method="post"/>';
    echo '<div>';
        echo '<h1>Formulaire d\'Article</h1>';
    echo '</div>';
    echo '<div class="espaceHMedium"></div>';
    echo '<div class="noDisplay"><input type="hidden" value="'.$elm->getIdArticle().'" name=idArticle></div>';
    echo '<section>';
        echo '<label>Libelle Article : </label>';
        echo '<input type="text" value="'. $elm->getLibelleArticle() .'" name="libelleArticle" pattern="'. $regex["alpha"] .'">';
    echo '</section>';
    echo '<section>';
        echo '<label>Ref Article : </label>';
        echo '<input type="text" value="'. $elm->getRefArticle() .'" name="refArticle" pattern="'. $regex["alphaNum"] .'">';
    echo '</section>';
    echo '<section>';
        echo '<label>Prix Article : </label>';
        echo '<input type="number" value="'. $elm->getPrix() .'" name="prixArticle" pattern="'. $regex["num"] .'">';
    echo '</section>';

    echo '<section>
                <button class="delete">
                    <a href="index.php?page=listeArticle">
                        Annuler
                    </a>
                </button>
            </section>';
    echo '<section>
                <button type="submit" class="ajouter">
                    Valider
                </button>
            </section>';
echo '</form>';
echo '</main>';