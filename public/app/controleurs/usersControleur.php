<?php
/*

    ./app/controleurs/usersControleur.php

*/

namespace App\Controleurs\UsersControleur;
use App\Modeles\UsersModele;

function loginFormAction() {
  // if (isset($_SESSION['user'])):
  //   header('location:' . BASE_URL_ADMIN);
  // endif;

  GLOBAL $content, $title;
  $title = TITRE_LOGIN;
  ob_start();
  include_once '../app/vues/users/loginForm.php';
  $content = ob_get_clean();
}


function loginCheckAction(\PDO $connexion) {
 // Cherchrer le user dont le login et le mot de passe correspond au $_POST
 include_once '../app/modeles/usersModele.php';
 $user = UsersModele\findOneByLoginPassword($connexion, $_POST['login'], $_POST['password']);
 if ($user) {
   // Créer une variable de session (Mettre badge à l'utilisateur)
   $_SESSION['user'] = $user;
   header('location:' . BASE_URL_ADMIN );
 }
 else {
   header('location:' . BASE_URL_PUBLIC . 'users/loginForm'); // redirection ?error=1
 }
}
