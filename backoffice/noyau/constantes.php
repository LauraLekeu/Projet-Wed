<?php
/*
  ./noyau/contantes.php
  Constantes du framework
 */


// BASE URL DE L'APPLICATION FRONT
  $url = explode('index.php', $_SERVER['SCRIPT_NAME']);
  define('BASE_URL_PUBLIC', 'http://' . $_SERVER['HTTP_HOST'] . $url[0]);


// BASE URL DE L'APPLICATION BACK
  // $url = explode('index.php', str_replace('public', 'admin', $_SERVER['SCRIPT_NAME']));
  // define('BASE_URL_ADMIN', 'http://' . $_SERVER['HTTP_HOST'] . $url[0]);

define('BASE_URL_ADMIN', str_replace('public', 'admin', BASE_URL_PUBLIC));
