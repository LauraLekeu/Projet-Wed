<?php
/*

      ./app/vues/auteurs/addForm.php

 */
?>
<h1><?php echo TITRE_AUTEURS_ADDFORM; ?></h1>
<div>
  <a href="auteurs">Retour vers la liste des auteurs</a>
</div>
<br />
<form action="auteurs/add/insert" method="post">

    <div class="form-group row">
     <label for="firstname" class="col-sm-2 col-form-label">Prénom de l'auteur'</label>
     <div class="col-sm-8">
       <input type="text" name="firstname" id="firstname" placeholder="Prénom de l'auteur">
     </div>
    </div>

   <div class="form-group row">
    <label for="lastname" class="col-sm-2 col-form-label">Nom de l'auteur'</label>
    <div class="col-sm-8">
      <input type="text" name="lastname" id="lastname" placeholder="Nom de l'auteur">
    </div>
   </div>

  <div class="form-group row">
    <label for="biography" class="col-sm-2 col-form-label">Biographie de l'auteur</label>
    <div class="col-sm-8">
     <textarea name="biography" id="biography" placeholder="Texte"></textarea>
    </div>
   </div>

   <div class="form-group row">
     <label for="avatar" class="col-sm-2 col-form-label">Télécharger une image</label>
     <div class="col-sm-8">
      <input type="file" name="avatar" id="avatar" accept=".jpg,.gif,.png">
     </div>
   </div>

  <input type="submit" value="Ajouter">
</form>
