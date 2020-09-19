<?php
/*

    ./app/vues/posts/search.php
      - variables disponibles : - $search: STRING
                                - $posts: ARRAY(ARRAY(p.id, p.title, p.content, p.created_at, p.image,  c.name))

*/
?>
<h2> Résultats de la recherche : </h2>
<hr />
<?php foreach ($posts as $post): ?>
  <article class="blog_item">
    <div class="blog_item_img">
        <img class="card-img rounded-0" src="assets/img/blog/<?php echo $post['postImage']; ?>" alt="">
        <a href="#" class="blog_item_date">
            <h3><?php echo date_format(date_create($post['postDate']), "d"); ?></h3>
            <p><?php echo date_format(date_create($post['postDate']), "M"); ?></p>
        </a>
    </div>

    <div class="blog_details">
        <a class="d-inline-block" href="posts/<?php echo $post['postId']; ?>-<?php echo \Noyau\Fonctions\slugify($post['postTitle']); ?>.html">
            <h2><?php echo $post['postTitle']; ?></h2>
        </a>
        <p><?php echo $post['postContent']; ?></p>
        <ul class="blog-info-link">
            <li><a href="#"><i class="fa fa-user"></i><?php echo $post['categorieName']; ?></a></li>
        </ul>
    </div>
  </article>
<?php endforeach; ?>
