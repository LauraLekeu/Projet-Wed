<?php
/*

    ./app/controleurs/tagsControleurs.php

*/

namespace App\Controleurs\TagsControleur;
use \App\Modeles\TagsModele;

function indexAction(\PDO $connexion) {
  // Demander la lise des tags au modele
  include_once '../app/modeles/tagsModele.php';
  $tags = TagsModele\findAll($connexion);
  // Charger la vue index dans $content
  GLOBAL $content, $title;
  $title = TITRE_TAGS_INDEX;
  ob_start();
    include '../app/vues/tags/index.php';
  $content = ob_get_clean();
}

function addFormAction() {
  // Charger la vue index dans $content
  GLOBAL $content, $title;
  $title = TITRE_TAGS_ADDFORM;
  ob_start();
    include '../app/vues/tags/addForm.php';
  $content = ob_get_clean();
}

function addAction(\PDO $connexion, array $data = null) {
  // Demander au modele d'ajouter un tag
  include_once '../app/modeles/tagsModele.php';
  $id = TagsModele\insertOne($connexion, $data);
  // Rediriger vers la liste des tags
  header('location: ' . BASE_URL_ADMIN . 'tags');
}

function deleteAction(\PDO $connexion, int $id) {
  // Demander au modele de supprimer un tag
  include_once '../app/modeles/tagsModele.php';
  $return = TagsModele\delete($connexion, $id);
  // Rediriger vers la liste des tags
  header('location: ' . BASE_URL_ADMIN . 'tags');
}

function editFormAction(\PDO $connexion, int $id) {
  // Demander un tag au modele
  include_once '../app/modeles/tagsModele.php';
  $tag = TagsModele\findOneById($connexion, $id);
  // Charger la vue editForm dans $content
  GLOBAL $content, $title;
  $title = TITRE_TAGS_EDITFORM;
  ob_start();
    include '../app/vues/tags/editForm.php';
  $content = ob_get_clean();
}

function editUpdateAction(\PDO $connexion, array $data = null) {
  // Demander au modele de modifier un tag
  include_once '../app/modeles/tagsModele.php';
  $return = TagsModele\update($connexion, $data);

  // Rediriger vers la liste des tags
  header('location: ' . BASE_URL_ADMIN . 'tags');
}
