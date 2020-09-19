<?php



use \App\Controleurs\PostsControleur;
include_once '../app/controleurs/postsControleur.php';

switch ($_GET['posts']):
  case 'show':
  // ROUTE DETAILS D'UN POST
  // PATTERN: /index.php?posts=show&id=x
  // CTRL: postsControleur
  // ACTION:  show
      PostsControleur\showAction($connexion, $_GET['id']);
    break;

  case 'search':
  // RECHERCHE D'UN POST
  // PATTERN: /index.php?posts=search
  // CTRL: postsControleur
  // ACTION:  search
      PostsControleur\searchAction($connexion, $_GET['search']);
    break;
endswitch;
