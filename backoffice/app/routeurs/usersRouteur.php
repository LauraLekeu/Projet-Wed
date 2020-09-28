<?php
/*

    ./app/routeurs/usersRouteur.php
    LE ROUTEUR DES USERS

*/

use \App\Controleurs\UsersControleur;
include_once '../app/controleurs/usersControleur.php';

switch ($_GET['users']):
  case 'loginForm':
  // PATTERN: users=loginForm
  // CTRL: usersControleur
  // ACTION:  loginForm
      UsersControleur\loginFormAction();
    break;
  case 'loginCheck':
  // PATTERN: users=loginCheck
  // CTRL: usersControleur
  // ACTION:  loginCheck
      UsersControleur\loginCheckAction($connexion);
    break;
  default:
  // Je charge un 404
    break;
endswitch;
