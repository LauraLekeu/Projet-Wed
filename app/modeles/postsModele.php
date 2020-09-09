<?php
/*

    ./app/modeles/postsModele.php

*/

namespace App\Modeles\PostsModele;

function findAll(\PDO $connexion) {
  $sql = "SELECT p.id AS postId,
                 p.title AS postTitle,
                 p.content AS postContent,
                 p.created_at AS postDate,
                 p.image As postImage,
                 c.name As categorieName
          FROM posts p
          JOIN categories c ON p.categorie_id = c.id
          ORDER BY p.created_at DESC
          LIMIT 5;";
  $rs = $connexion->query($sql);
  return $rs->fetchAll(\PDO::FETCH_ASSOC);
}
