<?php
/*

    ./app/routeurs/auteursRouteur.php

*/

use \App\Controleurs\AuteursControleur;

include_once '../app/controleurs/auteursControleur.php';

switch ($_GET['auteurs']):
  case 'index':
    // LISTE DES AUTEUR
    // PATTERN : index.php?auteurs=index
    // CTRL : auteursControleur
    // ACTION : index
    AuteursControleur\indexAction($connexion);
    break;
  case 'addForm':
    // AJOUT AUTEUR : FORMULAIRE
    // PATTERN : index.php?auteurs=index
    // CTRL : auteursControleur
    // ACTION : addForm
    AuteursControleur\addFormAction();
    break;
  case 'add':
    // AJOUT AUTEUR : INSERT
    // PATTERN : index.php?auteurs=add
    // CTRL : auteursControleur
    // ACTION : add
    AuteursControleur\addAction($connexion, [
       'firstname' => $_POST['firstname'],
       'lastname' => $_POST['lastname'],
       'biography' => $_POST['biography']
     ]);
    break;
  case 'delete':
    // SUPPRESSION AUTEUR : DELETE
    // PATTERN : index.php?auteurs=delete&id=x
    // CTRL : auteursControleur
    // ACTION : delete
    AuteursControleur\deleteAction($connexion, $_GET['id']);
    break;
  case 'editForm':
    // MODIFICATION AUTEUR : FORMULAIRE
    // PATTERN : index.php?auteurs=editForm&id=x
    // CTRL : auteursControleur
    // ACTION : editForm
    AuteursControleur\editFormAction($connexion, $_GET['id']);
    break;
  case 'edit':
    // MODIFICATION AUTEUR : UPDATE
    // PATTERN : index.php?auteurs=edit&id=x
    // CTRL : auteursControleur
    // ACTION : edit
    AuteursControleur\editAction($connexion, [
      'id' => $_GET['id'],
      'firstname' => $_POST['firstname'],
      'lastname' => $_POST['lastname'],
      'biography' => $_POST['biography']
    ]);
    break;
endswitch;
