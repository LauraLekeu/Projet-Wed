<?php
/*

    ./app/routeurs/categoriesRouteur.php

*/


include_once '../app/controleurs/categoriesControleur.php';

switch ($_GET['categories']):
  case 'index':
    // LISTE DES CATEGORIES
    // PATTERN : index.php?categories=index
    // CTRL : categoriesControleur
    // ACTION : index
    \App\Controleurs\CategoriesControleur\indexAction($connexion);
    break;
endswitch;
