<?php
/*

    ./app/routeurs/posts Routeur.php

*/

use \App\Controleurs\PostsControleur;

include_once '../app/controleurs/postsControleur.php';

switch ($_GET['posts']):
  case 'addForm':
    // AJOUT POST : FORMULAIRE
    // PATTERN : index.php?posts=addForm
    // CTRL : postsControleur
    // ACTION : addForm
    PostsControleur\addFormAction($connexion);
    break;
  default:
   // LISTE DES POSTS
   // PATTERN: index.php?posts
   // CTRL: postsControleur
   // ACTION: index
   PostsControleur\indexAction($connexion);
   break;
endswitch;
