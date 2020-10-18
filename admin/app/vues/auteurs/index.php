<?php
/*

      ./app/vues/auteurs/index.php


 */
?>


<div class="jumbotron">
  <h1><?php echo TITRE_AUTEURS_INDEX ?></h1>
  <p>This is a template showcasing the optional theme stylesheet included in Bootstrap. Use it as a starting point to create something more unique by building on or modifying it.</p>
  </div>

  <div class="">
    <a href="auteurs/add/form">Ajouter un auteur</a>
  </div>

  <table class="table table-striped">

  <thead>
    <tr>
      <th>#</th>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>Biography</th>
      <th>Avatar</th>
      <th>Created_at</th>
      <th>Action</th>
    </tr>
  </thead>

  <tbody>
    <?php foreach ($auteurs as $auteur): ?>
      <tr>
        <td><?php echo $auteur['id']; ?></td>
        <td><?php echo $auteur['firstname']; ?></td>
        <td><?php echo $auteur['lastname']; ?></td>
        <td><?php echo $auteur['biography']; ?></td>
        <td><img src="../../public/www/assets/img/blog/<?php echo $auteur['avatar']; ?>" alt="<?php echo $auteur['firstname']; ?> <?php echo $auteur['lastname']; ?>" width="100"> </td>
        <td><?php echo Noyau\Fonctions\formater_date($auteur['created_at']); ?></td>
        <td>
          <a href="auteurs/edit/form/<?php echo $auteur['id']; ?>">Edit</a> |
          <a href="auteurs/delete/<?php echo $auteur['id']; ?>" class="delete">Delete</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>

  </table>
