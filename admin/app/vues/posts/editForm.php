<?php
/*

      ./app/vues/posts/addForm .php

      Variables disponibles:
      - $post = ARRAY(ARRAY(title, content, created_at, image, author_id, categorie_id))
      - $postTags = ARRAY(id)
      - $auteurs = ARRAY(ARRAY(id, firstname, lastname, biography, avatar, created_at))
      - $categories = ARRAY(ARRAY(id, name, created_at))
      - $tags = ARRAY(ARRAY(id, name, created_at))

 */
?>

<h1><?php echo TITRE_POSTS_EDITFORM ?></h1>
<div>
  <a href="posts">Retour vers la liste des posts</a>
</div>
<br />
<form action="posts/edit/<?php echo $categorie['id']; ?>" method="post">

  <div class="form-group row">
    <label for="title" class="col-sm-2 col-form-label">Nom du post</label>
    <div class="col-sm-8">
     <input type="text" name="title" id="title" value="<?php echo $post['title']; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="content" class="col-sm-2 col-form-label">Contenu du post</label>
    <div class="col-sm-8">
     <textarea name="content" id="content"><?php echo $post['content']; ?></textarea>
    </div>
  </div>

  <div class="form-group row">
    <label for="image" class="col-sm-2 col-form-label">Télécharger une image</label>
    <div class="col-sm-8">
     <input type="file" name="image" id="image" accept=".jpg,.gif,.png">
    </div>
  </div>

  <div class="form-group row">
    <label for="auteur" class="col-sm-2 col-form-label">Choix de l'auteur</label>
    <div class="col-sm-8">
      <select name="auteur" id='auteur'>
        <?php foreach ($auteurs as $auteur): ?>
          <option value="<?php echo $auteur['id']; ?>" <?php if($auteur['id'] == $post['author_id']){echo 'selected="selected"';} ?>><?php echo $auteur['firstname']; ?> <?php echo $auteur['lastname']; ?></option>
        <?php endforeach; ?>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <label for="categorie" class="col-sm-2 col-form-label">Choic de catégorie</label>
    <div class="col-sm-8">
      <select name="categorie" id='categorie'>
        <?php foreach ($categories as $categorie): ?>
          <option value="<?php echo $categorie['id']; ?>" <?php if($categorie['id'] == $post['categorie_id']){echo 'selected="selected"';} ?>><?php echo $categorie['name']; ?></option>
        <?php endforeach; ?>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-8">
      <?php foreach ($tags as $tag): ?>
         <input type="checkbox" name="tags[]" value="<?php echo $tag['id']; ?>" id="<?php echo $tag['name']; ?>"  <?php if(in_array($tag['id'], $postTags) ){echo 'checked="checked"';} ?>> <!-- categorie[] pour récuper TOUS les id des tags sélectionnés -->
         <label for="<?php echo $tag['name']; ?>"> <?php echo $tag['name']; ?> </label>
      <?php endforeach; ?>
    </div>
  </div>

  <input type="submit" value="Ajouter">
</form>
