<?php

//on détruit la session pour déconnecter un utilisateur et on redirige vers la page d'inscription
session_destroy();
//après avoir détruit la session, on redirige vers la connexion.
header('location:index.php?page=formConnexion');