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

function addAction(\PDO $connexion) {
  // Demander au modèle d'ajouter le posts
  include_once '../app/modeles/postsModele.php';
  $id =  PostsModele\insertOne($connexion, $_POST);
  // Demander au modèle d'ajouter les tags cochés dans le formulaire
  foreach ($_POST['tags'] as $tagId) {
  $return = PostsModele\insertTagById($connexion, [
     'postId' => $id, // le $id récupéré au dessus du foreach
     'tagId'  => $tagId
   ]);
  }
  // // Rediriger vers la liste des posts
  header('location: ' . BASE_URL_ADMIN . 'posts');
}

function deleteAction(\PDO $connexion, int $id) {
  // Demander au modèle de supprimer les liaisons N-M correspondantes
  include_once '../app/modeles/postsModele.php';
  $return1 = PostsModele\deletePostsHasTagsByPostId($connexion, $id);
  // Demander au modèle de supprimer le post
  $return = PostsModele\deleteOneById($connexion, $id);
  // Rediriger vers la liste des posts
  header('location: ' . BASE_URL_ADMIN . 'posts');
}

function editFormAction(\PDO $connexion, int $id) {
  // Demander au modèle le post à modifier dans le formulaire
  include_once '../app/modeles/postsModele.php';
  $post = PostsModele\findOneById($connexion, $id);
  // Demander au modèle les tags du post affiché dans le formulaire
  include_once '../app/modeles/postsModele.php';
  $postTags = PostsModele\findTagByPostId($connexion, $id);


  // Demander les auteurs au modèle
  include_once '../app/modeles/auteursModele.php';
  $auteurs = \App\Modeles\AuteursModele\findAll($connexion);
  // Demander les catégories au modèle
  include_once '../app/modeles/categoriesModele.php';
  $categories = \App\Modeles\CategoriesModele\findAll($connexion);
  // Demander les tags au modèle
  include_once '../app/modeles/tagsModele.php';
  $tags = \App\Modeles\TagsModele\findAll($connexion);

  // Charger la vue editForm dans $content
  GLOBAL $content, $title;
  $title = TITRE_POSTS_EDITFORM;
  ob_start();
   include '../app/vues/posts/editForm.php';
  $content = ob_get_clean();
}
