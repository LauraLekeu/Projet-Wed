<?php
/*

    ./app/controleurs/auteursControleurs.php

*/

namespace App\Controleurs\AuteursControleur;
use \App\Modeles\AuteursModele;

function indexAction(\PDO $connexion) {
  // Demander la lise des auteurs au modele
  include_once '../app/modeles/auteursModele.php';
  $auteurs = AuteursModele\findAll($connexion);
  // Charger la vue index dans $content
  GLOBAL $content, $title;
  $title = TITRE_AUTEURS_INDEX;
  ob_start();
    include '../app/vues/auteurs/index.php';
  $content = ob_get_clean();
}

function addFormAction() {
  // Charger la vue index dans $content
  GLOBAL $content, $title;
  $title = TITRE_AUTEURS_ADDFORM;
  ob_start();
    include '../app/vues/auteurs/addForm.php';
  $content = ob_get_clean();
}

function addAction(\PDO $connexion, array $data = null) {
  // Demander au modèle d'ajouter l'auteur
  include_once '../app/modeles/auteursModele.php';
  $id = AuteursModele\insert($connexion, $data);
  // Rediriger vers la liste des auteurs
  header('location: ' . BASE_URL_ADMIN . 'auteurs');

}

function deleteAction(\PDO $connexion, int $id) {
  // Demander au modèle de supprimer l'auteur
  include_once '../app/modeles/auteursModele.php';
  $return = AuteursModele\delete($connexion, $id); // $return = un boolean (true ou false)
  // Rediriger vers la liste des auteurs
  header('location: ' . BASE_URL_ADMIN . 'auteurs');
}

function editFormAction(\PDO $connexion, int $id) {
  // Demander au modèle de modifier l'auteur
  include_once '../app/modeles/auteursModele.php';
  $auteur  = AuteursModele\findOneById($connexion, $id); // $return = un boolean (true ou false)
  // Charger la vue editForm dans $content
  GLOBAL $content, $title;
  $title = TITRE_AUTEURS_EDITFORM;
  ob_start();
    include '../app/vues/auteurs/editForm.php';
  $content = ob_get_clean();
}

function editAction(\PDO $connexion, array $data = null) {
  // Demander au modèle d'updater l'auteur
  include_once '../app/modeles/auteursModele.php';
  $return = AuteursModele\update($connexion, $data); // $return = un boolean (true ou false)
  // Rediriger vers la liste des auteurs
  header('location: ' . BASE_URL_ADMIN . 'auteurs');
}
