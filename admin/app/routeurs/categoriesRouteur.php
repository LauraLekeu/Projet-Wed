<?php
/*

    ./app/routeurs/categoriesRouteur.php

*/

use \App\Controleurs\CategoriesControleur;

include_once '../app/controleurs/categoriesControleur.php';

switch ($_GET['categories']):
  case 'index':
    // LISTE DES CATEGORIES
    // PATTERN : index.php?categories=index
    // CTRL : categoriesControleur
    // ACTION : index
    CategoriesControleur\indexAction($connexion);
    break;
  case 'addForm':
    // AJOUT CATEGORIE : FORMULAIRE
    // PATTERN : index.php?categories=index
    // CTRL : categoriesControleur
    // ACTION : addForm
    CategoriesControleur\addFormAction();
    break;
  case 'add':
    // AJOUT CATEGORIE : INSERT
    // PATTERN : index.php?categories=add
    // CTRL : categoriesControleur
    // ACTION : add
    CategoriesControleur\addAction($connexion, [
       'name' => $_POST['name']
     ]);
    break;
endswitch;
