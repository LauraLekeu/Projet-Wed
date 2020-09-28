<?php
/*

    ./app/vues/posts/show.php
      - variables disponibles : ARRAY(id, title, content, created_at, image)

*/
?>

<div class="single-post">
   <div class="feature-img">
      <img class="img-fluid" src="assets/img/blog/<?php echo $post['image']; ?>" alt="">
   </div>
   <div class="blog_details">
      <h2><?php echo $post['title']; ?>
      </h2>
      <ul class="blog-info-link mt-3 mb-4">
         <li><a href="#"><i class="fa fa-user"></i><?php echo $post['name']; ?></a></li>
      </ul>
      <p class="excert">
         <?php echo $post['content']; ?>
      </p>
   </div>
</div>

<div class="blog-author">
   <div class="media align-items-center">
      <img src="assets/img/blog/<?php echo $post['avatar']; ?>" alt="">
      <div class="media-body">
         <a href="#">
            <h4><?php echo $post['firstname']; ?> <?php echo $post['lastname']; ?></h4>
         </a>
         <p><?php echo $post['biography']; ?></p>
      </div>
   </div>
</div>
