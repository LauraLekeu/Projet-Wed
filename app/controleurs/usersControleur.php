<?php
/*

    ./app/controleurs/usersControleur.php

*/

namespace App\Controleurs\UsersControleur;
use App\Modeles\UsersModele;

function loginFormAction() {
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

 }
 else {
   header('location:' . BASE_URL . 'users/loginForm'); // redirection ?error=1 
 }
}
