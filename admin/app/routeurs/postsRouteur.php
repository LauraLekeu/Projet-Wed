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
  case 'add':
    // AJOUT POST : INSERT
    // PATTERN : index.php?posts=add
    // CTRL : postsControleur
    // ACTION : add
    PostsControleur\addAction($connexion);
    break;
  case 'delete':
    // AJOUT POST : DELETE
    // PATTERN : index.php?posts=add
    // CTRL : postsControleur
    // ACTION : delete
    PostsControleur\deleteAction($connexion, $_GET['id']);
    break;
  case 'editForm':
    // MODIFICATION POST : FORMULAIRE
    // PATTERN : index.php?posts=editForm&id=x
    // CTRL : postsControleur
    // ACTION : editForm
    PostsControleur\editFormAction($connexion, $_GET['id']);
    break;
  default:
   // LISTE DES POSTS
   // PATTERN: index.php?posts
   // CTRL: postsControleur
   // ACTION: index
   PostsControleur\indexAction($connexion);
   break;
endswitch;
