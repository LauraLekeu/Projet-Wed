<?php
/*

      ./app/vues/categories/addForm.php

 */
?>
<h1><?php echo TITRE_TAGS_ADDFORM; ?></h1>
<div>
  <a href="tags">Retour vers la liste des tags</a>
</div>
<br />
<form action="tags/add/insert" method="post">
  <div class="form-group row">
   <label for="name" class="col-sm-2 col-form-label">Nom du tag</label>
   <div class="col-sm-8">
     <input type="text" name="name" id="name" placeholder="Nom du tag">
   </div>
 </div>
  <input type="submit" value="Ajouter">
</form>
