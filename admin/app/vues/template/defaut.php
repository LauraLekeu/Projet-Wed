<?php
/*

    ./app/vues/template/defaut.php

*/
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php include '../app/vues/template/partials/_head.php'; ?>
  </head>

  <body>

    <?php include '../app/vues/template/partials/_nav.php'; ?>
    <div class="container jumbotron" role="main">
      <?php echo $content; ?>
    </div>

    <?php include '../app/vues/template/partials/_scripts.php'; ?>

  </body>
</html>
