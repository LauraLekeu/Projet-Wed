<?php
/*

    ./app/controleurs/postsControleurs.php

*/

namespace App\Controleurs\PostsControleur;
use \App\Modeles\PostsModele;

function indexAction(\PDO $connexion) {
  // Demander la lise des posts au modele
  include_once '../app/modeles/postsModele.php';
  $posts = PostsModele\findAll($connexion);
  // Charger la vue index dans $content
  GLOBAL $content, $title;
  $title = TITRE_POSTS_INDEX;
  ob_start();
    include '../app/vues/posts/index.php';
  $content = ob_get_clean();
}

function addFormAction(\PDO $connexion) {
  // Demander les auteurs au modèle
  include_once '../app/modeles/auteursModele.php';
  $auteurs = \App\Modeles\AuteursModele\findAll($connexion);

  // Demander les catégories au modèle
  include_once '../app/modeles/categoriesModele.php';
  $categories = \App\Modeles\CategoriesModele\findAll($connexion);

  // Demander les tags au modèle
  include_once '../app/modeles/tagsModele.php';
  $tags = \App\Modeles\TagsModele\findAll($connexion);

  // Charger la vue addForm dans $content
  GLOBAL $content, $title;
  $title = TITRE_POSTS_ADDFORM;
  ob_start();
    include '../app/vues/posts/addForm.php';
  $content = ob_get_clean();
}
