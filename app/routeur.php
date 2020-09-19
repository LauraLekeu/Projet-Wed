<?php
/*

    ./app/routeur.php

*/

// ROUTE D'UN POST
// PATTERN: /index.php?postId=x
// CTRL: postsControleur
// ACTION:  showAction
if (isset($_GET['postId'])):
include_once '../app/controleurs/postsControleur.php';
\App\Controleurs\PostsControleur\showAction($connexion, $_GET['postId']);

else:
// ROUTE PAR DEFAUT (Liste des 10 derniers posts)
// PATTERN: /
// CTRL: postsControleur
// ACTION:  indexAction
include_once '../app/controleurs/postsControleur.php';
\App\Controleurs\PostsControleur\indexAction($connexion);
endif;
