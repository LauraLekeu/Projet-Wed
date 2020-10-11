<?php
/*

    ./app/routeurs/posts Routeur.php

*/

use \App\Controleurs\PostsControleur;

include_once '../app/controleurs/postsControleur.php';

switch ($_GET['posts']):
  default:
   // LISTE DES POSTS
   // PATTERN: index.php?posts
   // CTRL: postsControleur
   // ACTION: index
      PostsControleur\indexAction($connexion);
   break;   
endswitch;
