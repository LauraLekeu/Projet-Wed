<?php
/*

      ./app/vues/categories/index.php
      Variables disponibles:  $categories ARRAY(ARRAY(id, namen created_at))

 */
?>


<div class="jumbotron">
  <h1><?php echo TITRE_TAGS_INDEX ?></h1>
  <p>This is a template showcasing the optional theme stylesheet included in Bootstrap. Use it as a starting point to create something more unique by building on or modifying it.</p>
</div>

<div class="">
    <a href="tags/add/form">Add a tag</a>
</div>

<table class="table table-striped">

  <thead>
    <tr>
      <th>#</th>
      <th>Name</th>
      <th>Created_at</th>
      <th>Actions</th>
    </tr>
  </thead>

  <tbody>
    <?php foreach ($tags as $tag): ?>
      <tr>
        <td><?php echo $tag['id']; ?></td>
        <td><?php echo $tag['name']; ?></td>
        <td><?php echo $tag['created_at']; ?></td>
        <td>
          <a href="tags/edit/form/<?php echo $tag['id']; ?>">Edit</a> |
          <a href="tags/delete/<?php echo $tag['id']; ?>" class="delete" >Delete</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>

</table>
