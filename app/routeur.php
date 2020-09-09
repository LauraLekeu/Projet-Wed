<?php
/*

    ./app/routeur.php

*/

// ROUTE PAR DEFAUT (Liste des 10 derniers posts)
// PATTERN: /
// CTRL: postsControleur
// ACTION:  indexAction


include_once '../app/controleurs/postsControleur.php';
\App\Controleurs\PostsControleur\indexAction($connexion);
