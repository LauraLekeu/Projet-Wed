<?php
/*

    ./app/routeur.php

*/

// ROUTES DES USERS
if (isset($_GET['categories'])):
  include_once '../app/routeurs/categoriesRouteur.php';


// ROUTES DES USERS
elseif (isset($_GET['users'])):
  include_once '../app/routeurs/usersRouteur.php';

// ROUTE PAR DEFAUT
else:
  include_once '../app/controleurs/usersControleur.php';
  \App\Controleurs\UsersControleur\dashboardAction($connexion);

endif;
