<?php
/*

    ./app/controleurs/usersControleurs.php

*/

namespace App\Controleurs\UsersControleur;
// use \App\Modeles\UsersModele;

function dashboardAction(\PDO $connexion) {
  // Charger la vue dashboard dans $content
  GLOBAL $content, $title;
  $title = TITRE_USERS_DASHBOARD;
  ob_start();
    include '../app/vues/users/dashboard.php';
  $content = ob_get_clean();
}


function logoutAction() {
  // Tuer la variable de session 'user'
  unset($_SESSION['user']);
  // Rediriger vers le site public
  header('location: ' . BASE_URL_PUBLIC);
}
