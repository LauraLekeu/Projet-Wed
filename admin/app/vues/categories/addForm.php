<?php
/*

      ./app/vues/categories/addForm.php

 */
?>
<h1><?php echo TITRE_CATEGORIES_ADDFORM; ?></h1>
<div>
  <a href="categories">Retour vers la liste des catégories</a>
</div>
<br />
<form action="categories/add/insert" method="post">
  <div class="form-group row">
   <label for="name" class="col-sm-2 col-form-label">Nom de la catégorie</label>
   <div class="col-sm-8">
     <input type="text" name="name" id="name" placeholder="Nom de la catégorie">
   </div>
 </div>
  <input type="submit" value="Ajouter">
</form>
