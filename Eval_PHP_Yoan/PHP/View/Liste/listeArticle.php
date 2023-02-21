<?php

//On appelle la fonction getList du manager et on stocke les données dans une variable $data
$data = ArticlesManager::getList();

echo '<main>';
    echo '<div>
                <h1>Liste d\'Articles</h1>
            </div>';
            echo '<div class="card">
                        <section>
                            <a href="index.php?page=formArticle&mode=ajouter">Ajouter</a>
                        </section>
                    </div>';
            foreach ($data as $value) {
                echo '<div>';
                    echo '<div class="card">
                                <a href="index.php?page=formArticle&mode=modifier&id='. $value->getIdArticle() .'">
                                    <div>
                                        <section class="alignTextCenter">LibelleArticle</section>
                                        <section class="alignTextCenter">'. $value->getLibelleArticle() .'</section>
                                    </div>

                                    <div>
                                        <section class="alignTextCenter">RefArticle</section>
                                        <section class="alignTextCenter">'. $value->getRefArticle() .'</section>
                                    </div>

                                    <div>
                                        <section class="alignTextCenter">Prix</section>
                                        <section class="alignTextCenter">'. $value->getPrix() .' euros</section>
                                    </div>

                                    <div>
                                        <section class="alignTextCenter">Quantite</section>
                                        <section class="alignTextCenter"></section>
                                    </div>

                                    <div>
                                        <section class="alignTextCenter">Délai</section>
                                        <section class="alignTextCenter"></section>
                                    </div>
                                </a>
                            </div>';
                echo '</div>';
            }

            // foreach ($data as $value) {
            //     echo '<div id="articles" class="card"></div>';
            // }

            // echo '<template id="article">
            //             <div class=arti></div>
            //         </template>';
echo '</main>';