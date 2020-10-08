<?php
/*

    ./www/noyau/protection.php
    Redirection en cas d'acces direct au backoffice

*/


if (!isset($_SESSION['user'])) :
  header('location:' . BASE_URL_PUBLIC . 'users/loginForm');
endif;
