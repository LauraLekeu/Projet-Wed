<?php
/*

    ./app/routeur.php

*/

// PAGE CONTACT
// PATTERN: /contact.html
// CTRL: -
// ACTION:  -
if (isset($_GET['contact'])):
  $title = TITRE_CONTACT;
  ob_start(); // pas besoin de mettre global car on est dans le routeur, au même niveau que les parametres
  include_once '../app/vues/template/partials/_contact.php';
  $content = ob_get_clean();


// ROUTE D'UN POST
// PATTERN: /index.php?postId=x
// CTRL: postsControleur
// ACTION:  showAction
elseif (isset($_GET['postId'])):
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
