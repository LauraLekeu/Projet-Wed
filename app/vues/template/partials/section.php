<?php
/*

    ./app/vues/template/partials/section.php

*/
?>



<main>
  <section class="blog_area section-padding">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 mb-5 mb-lg-0">
                  <div class="blog_left_sidebar">
                      <?php echo $content ?>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="blog_right_sidebar">
                      <?php  include_once '../app/vues/template/partials/aside.php'; ?>
                  </div>
              </div>
          </div>
      </div>
  </section>
</main>
