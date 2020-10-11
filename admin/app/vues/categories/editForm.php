<?php
/*

      ./app/vues/categories/editForm.php
      variables disponibles : ARRAY(id, name, created_at)

 */
?>

<h1><?php echo TITRE_CATEGORIES_EDITFORM; ?></h1>
<div>
  <a href="categories">Retour vers la liste des catégories</a>
</div>
<br />
<form action="categories/edit/<?php echo $categorie['id']; ?>" class="edit" method="post">
  <div class="form-group row">
   <label for="name" class="col-sm-2 col-form-label">Nom de la catégorie</label>
   <div class="col-sm-8">
     <input type="text" name="name" id="name" value="<?php echo $categorie['name']; ?>">
   </div>
 </div>
  <input type="submit" value="Modifier">
</form>
