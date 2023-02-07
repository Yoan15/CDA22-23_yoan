<?php

//on détruit la session pour déconnecter un utilisateur et on redirige vers la page d'inscription
session_destroy();
header('location:index.php?page=Default');