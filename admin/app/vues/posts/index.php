<?php
/*

      ./app/vues/posts/index.php
      Variables disponibles:

 */
?>


<div class="jumbotron">
  <h1><?php echo TITRE_POSTS_INDEX ?></h1>
  <p>This is a template showcasing the optional theme stylesheet included in Bootstrap. Use it as a starting point to create something more unique by building on or modifying it.</p>
</div>

<div class="">
    <a href="posts/add/form">Ajouter un post</a>
</div>

<table class="table table-striped">

  <thead>
    <tr>
      <th>#</th>
      <th>Title</th>
      <th>Content</th>
      <th>Created_at</th>
      <th>Image</th>
      <th>Categorie</th>
      <th>Author</th>
      <th>Action</th>
    </tr>
  </thead>

  <tbody>
    <?php foreach ($posts as $post): ?>
      <tr>
        <td><?php echo $post['postId']; ?></td>
        <td><?php echo $post['postTitle']; ?></td>
        <td><?php echo Noyau\Fonctions\strCut($post['postContent']); ?></td>
        <td><?php echo Noyau\Fonctions\formater_date($post['postDate']); ?></td>
        <td><img src="../../public/www/assets/img/blog/<?php echo $post['postImage']; ?>" alt="<?php echo $post['postTitle']; ?>" width="100"> </td>
        <td><?php echo $post['categorieName']; ?></td>
        <td><?php echo $post['authorFirstName']; ?> <?php echo $post['authorLastName']; ?></td>
        <td>
          <a href="posts/edit/form/<?php echo $post['id']; ?>">Edit</a> |
          <a href="posts/delete/<?php echo $post['postId']; ?>" class="delete">Delete</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>

</table>
