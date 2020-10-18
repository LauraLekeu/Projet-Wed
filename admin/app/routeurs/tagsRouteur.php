<?php
/*

    ./app/routeurs/tagsRouteur.php

*/

use \App\Controleurs\TagsControleur;

include_once '../app/controleurs/tagsControleur.php';

switch ($_GET['tags']):
  case 'index':
    // LISTE DES TAGS
    // PATTERN : index.php?tags=index
    // CTRL : tagsControleur
    // ACTION : index
    TagsControleur\indexAction($connexion);
    break;
  case 'addForm':
    // AJOUT TAG : FORMULAIRE
    // PATTERN : index.php?tags=addForm
    // CTRL : tagsControleur
    // ACTION : addForm
    TagsControleur\addFormAction();
    break;
  case 'add':
    // AJOUT TAGS : INSERT
    // PATTERN : index.php?tags=add
    // CTRL : tagsControleur
    // ACTION : index
    TagsControleur\addAction($connexion, [
      'name' => $_POST['name']
    ]);
    break;
  case 'delete':
    // SUPPRESSION TAG : DELETE
    // PATTERN : index.php?tags=delete
    // CTRL : tagsControleur
    // ACTION : delete
    TagsControleur\deleteAction($connexion, $_GET['id']);
    break;
  case 'editForm':
    // MODIFICATION TAG : FORMULAIRE
    // PATTERN : index.php?tags=editForm&id=x
    // CTRL : tagsControleur
    // ACTION : editForm
    TagsControleur\editFormAction($connexion, $_GET['id']);
    break;
  case 'edit':
    // MODIFICATION TAG : FORMULAIRE
    // PATTERN : index.php?tags=editForm&id=x
    // CTRL : tagsControleur
    // ACTION : editForm
    TagsControleur\editUpdateAction($connexion, [
      'id' => $_GET['id'],
      'name' => $_POST['name']
    ]);
    break;
endswitch;
