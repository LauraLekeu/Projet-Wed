<?php
/*

    ./app/controleurs/postsControleur.php

*/

namespace App\Controleurs\PostsControleur;
use App\Modeles\PostsModele;

function indexAction(\PDO $connexion) {
  // Demander la liste des posts au modèle
  include_once '../app/modeles/postsModele.php';
  $posts = PostsModele\findAll($connexion);
  // Charger la vue show dans $content
  GLOBAL $content, $title;
  $title = TITRE_POST_INDEX;
  ob_start();
  include '../app/vues/posts/index.php';
  $content = ob_get_clean();
}

function showAction(\PDO $connexion, int $id) {
  // Demander le détail d'un post au modèle
  include_once '../app/modeles/postsModele.php';
  $post = PostsModele\findOneById($connexion, $id);
  // Charger la vue show dans $content
  GLOBAL $content, $title;
  $title = $post['title'];
  ob_start();
  include '../app/vues/posts/show.php';
  $content = ob_get_clean();
}

function searchAction(\PDO $connexion, string $search) {
  // Demander la liste des posts au modele
  include_once '../app/modeles/postsModele.php';
  $posts = PostsModele\findAllBySearch($connexion, $search);
  // Charger la vue search dans $content
  GLOBAL $content, $title;
  $title = $search;
  ob_start();
  include '../app/vues/posts/search.php';
  $content = ob_get_clean();
}
