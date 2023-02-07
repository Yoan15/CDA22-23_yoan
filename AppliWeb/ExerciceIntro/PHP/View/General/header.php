<?php

function headerHtml()
{
    $header = '<header>
                <div>';
                if(isset($_SESSION['utilisateur']))
                {
                    $header .= '<section>
                                    Bonjour, '. $_SESSION['utilisateur']->getNom() .' '. $_SESSION['utilisateur']->getPrenom() .'
                                </section>';
                    $header .= '<section>
                                    <a href="index.php?page=actionDeconnexion" class="center header">
                                        Déconnexion
                                    </a>
                                </section>';
                    $header .= '<section>
                                    <a href="index.php?page=formChangeMdp" class="center header">
                                        Changer de mot de passe
                                    </a>
                                </section>';
                }
                else
                {
                    $header .= '<section>
                                    <a href="index.php?page=formConnexion" class="center header">
                                        Connexion
                                    </a>
                                </section>';
                    $header .= '<div class="espaceHMedium"></div>';
                }
    $header .= '</div>
                </header>';
    return $header;
}