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

function addFormAction() {
  // Charger la vue index dans $content
  GLOBAL $content, $title;
  $title = TITRE_CATEGORIES_ADDFORM;
  ob_start();
    include '../app/vues/categories/addForm.php';
  $content = ob_get_clean();
}

function addAction(\PDO $connexion, array $data = null) {
  // Demander au modèle d'ajouter la categorie
  include_once '../app/modeles/categoriesModele.php';
  $id = CategoriesModele\insert($connexion, $data);
  // Rediriger vers la liste des catégories
  header('location: ' . BASE_URL_ADMIN . 'categories');
}

function deleteAction(\PDO $connexion, int $id) {
  // Demander au modèle de supprimer la categorie
  include_once '../app/modeles/categoriesModele.php';
  $return = CategoriesModele\delete($connexion, $id); // $return = un boolean (true ou false)
  // Rediriger vers la liste des catégories
  header('location: ' . BASE_URL_ADMIN . 'categories');
}

function editFormAction(\PDO $connexion, int $id) {
  // Demander au modèle de modifier la categorie
  include_once '../app/modeles/categoriesModele.php';
  $categorie  = CategoriesModele\findOneById($connexion, $id); // $return = un boolean (true ou false)
  // Charger la vue editForm dans $content
  GLOBAL $content, $title;
  $title = TITRE_CATEGORIES_EDITFORM;
  ob_start();
    include '../app/vues/categories/editForm.php';
  $content = ob_get_clean();
}

function editAction(\PDO $connexion, array $data = null) {
  // Demander au modèle d'updater la categorie
  include_once '../app/modeles/categoriesModele.php';
  $return = CategoriesModele\update($connexion, $data); // $return = un boolean (true ou false)
  // Rediriger vers la liste des catégories
  header('location: ' . BASE_URL_ADMIN . 'categories');
}
