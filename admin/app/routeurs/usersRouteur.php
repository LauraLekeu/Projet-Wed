<?php
/*

    ./app/routeurs/usersRouteur.php

*/

use \App\Controleurs\UsersControleur;
include_once '../app/controleurs/usersControleur.php';

switch ($_GET['users']):
  case 'logout':
    // LOGOUT
    // PATTERN : index.php?users=logout
    // CTRL : usersControleur
    // ACTION : logout
    UsersControleur\logoutAction();
    break;
endswitch;
