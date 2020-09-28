<?php
/*

    ./app/vues/users/loginForm.php

*/
?>

<div class="">
  <h2> Connexion au backoffice </h2>
  <hr />
  <!-- <?php if (isset($_GET['error'])) : ?>
          <div class="">Veuillez vérifier votre login et mot de passe</div>
  <?php endif; ?> -->

  <form action="users/login/submit" method="post">
    <div class="form-group">
      <label for="login">Login</label>
      <input type="text"  name="login" class="form-control" id="login" aria-describedby="loginHelp" placeholder="Enter login">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" name="password" id="password" class="form-control" id="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
