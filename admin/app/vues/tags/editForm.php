<?php
/*

      ./app/vues/categories/editForm.php
      variables disponibles : ARRAY(id, name, created_at)

 */
?>

<h1><?php echo TITRE_TAGS_EDITFORM; ?></h1>
<div>
  <a href="tags">Retour vers la liste des tags</a>
</div>
<br />
<form action="tags/edit/<?php echo $tag['id']; ?>" method="post">
  <div class="form-group row">
   <label for="name" class="col-sm-2 col-form-label">Nom du tag</label>
   <div class="col-sm-8">
     <input type="text" name="name" id="name" value="<?php echo $tag['name']; ?>">
   </div>
 </div>
  <input type="submit" value="Ajouter">
</form>
