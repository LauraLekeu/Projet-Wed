<?php
/*

    ./app/config/params.php

*/

// Constantes de connexion
define ( 'HOSTNAME' , 'localhost' );
define ( 'DBNAME' , 'projet_wed_db' );
define ( 'USERNAME' , 'root' );
define ( 'USERPWD' , 'root' );

// Zones dynamiques du template
$content = '';
$title = '';

// Textes
define('TITRE_USERS_DASHBOARD', "Dashboard");

define('TITRE_CATEGORIES_INDEX', "Liste des catégories");
define('TITRE_CATEGORIES_ADDFORM', "Ajout d'une catégorie");
define('TITRE_CATEGORIES_EDITFORM', "Modification d'une catégorie");

define('TITRE_POSTS_INDEX', "Liste des posts");
define('TITRE_POSTS_ADDFORM', "Ajout d'un post");
define('TITRE_POSTS_EDITFORM', "Modification d'un post");

define('TITRE_AUTEURS_INDEX', "Liste des auteurs");
define('TITRE_AUTEURS_ADDFORM', "Ajout d'un auteur");
define('TITRE_AUTEURS_EDITFORM', "Modification d'un auteur");

define('TITRE_TAGS_INDEX', "Liste des tags");
define('TITRE_TAGS_ADDFORM', "Ajout d'un tag");
define('TITRE_TAGS_EDITFORM', "Modification d'un tag");
