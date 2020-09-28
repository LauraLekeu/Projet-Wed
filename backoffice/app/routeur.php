<?php
/*

    ./app/routeur.php

*/

// ROUTE PAGE CONTACT
if (isset($_GET['contact'])):
  // PATTERN: /contact.html
  // CTRL: -
  // ACTION:  -
  $title = TITRE_CONTACT;
  ob_start(); // pas besoin de mettre global car on est dans le routeur, au même niveau que les parametres
  include_once '../app/vues/template/partials/_contact.php';
  $content = ob_get_clean();


// ROUTES DES POSTS
elseif (isset($_GET['posts'])):
  include_once '../app/routeurs/postsRouteur.php';

// ROUTES DES USERS
elseif (isset($_GET['users'])):
  include_once '../app/routeurs/usersRouteur.php';


else:
// ROUTE PAR DEFAUT
  // PATTERN: /
  // CTRL: postsControleur
  // ACTION:  indexAction
include_once '../app/controleurs/postsControleur.php';
  \App\Controleurs\PostsControleur\indexAction($connexion);
  endif;
