<?php
/*

    ./app/controleurs/categoriesControleurs.php

*/

namespace App\Controleurs\CategoriesControleur;
use \App\Modeles\CategoriesModele;

function indexAction(\PDO $connexion) {
  // Demander la lise des categories au modele
  include_once '../app/modeles/categoriesModele.php';
  $categories = CategoriesModele\findAll($connexion);
  // Charger la vue index dans $content
  GLOBAL $content, $title;
  $title = TITRE_CATEGORIES_INDEX;
  ob_start();
    include '../app/vues/categories/index.php';
  $content = ob_get_clean();
}
