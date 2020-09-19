<?php
/*

    ./app/routeur.php

*/


if (isset($_GET['contact'])):
// ROUTE PAGE CONTACT
  // PATTERN: /contact.html
  // CTRL: -
  // ACTION:  -
  $title = TITRE_CONTACT;
  ob_start(); // pas besoin de mettre global car on est dans le routeur, au même niveau que les parametres
  include_once '../app/vues/template/partials/_contact.php';
  $content = ob_get_clean();



elseif (isset($_GET['posts'])):
// ROUTES DES POSTS
  include_once '../app/routeurs/postsRouteur.php';


else:
// ROUTE PAR DEFAUT
  // PATTERN: /
  // CTRL: postsControleur
  // ACTION:  indexAction
include_once '../app/controleurs/postsControleur.php';
  \App\Controleurs\PostsControleur\indexAction($connexion);
  endif;
